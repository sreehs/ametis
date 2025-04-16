<?php
// Use statements for PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
// Make sure the path is correct relative to this contact.php file
require 'vendor/autoload.php'; 

// Optional: Set page title variable if your header.php uses it
$pageTitle = "Contact Us - Algometis"; 

// Form handling logic
$form_message = ''; // Message to display in case of error (no redirect)
$form_error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- Configuration ---
    $recipient_email = "hello@algometis.com"; // Your receiving email address
    $subject_prefix = "[Algometis Contact Form]";
    $redirect_url = "thank-you.php"; // The page to redirect to on success
    
    // --- Get and Sanitize Form Data ---
    $name = trim($_POST['name'] ?? '');
    $company_email = trim($_POST['company_email'] ?? '');
    $company_name = trim($_POST['company_name'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // --- Basic Validation ---
    if (empty($name)) {
        $form_message = 'Please enter your name.';
        $form_error = true;
    } elseif (empty($company_email) || !filter_var($company_email, FILTER_VALIDATE_EMAIL)) {
        $form_message = 'Please enter a valid company email address.';
        $form_error = true;
    } elseif (empty($message)) {
        $form_message = 'Please enter your message.';
        $form_error = true;
    }

    // --- If Validation Passes, Attempt to Send Email using PHPMailer ---
    if (!$form_error) {
        // Sanitize data
        $name_sanitized = filter_var($name, FILTER_SANITIZE_STRING);
        $company_email_sanitized = filter_var($company_email, FILTER_SANITIZE_EMAIL);
        $company_name_sanitized = filter_var($company_name, FILTER_SANITIZE_STRING);
        $message_sanitized = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES); 

        // Construct Email Subject and Body
        $email_subject = "$subject_prefix Inquiry from $name_sanitized";
        
        $email_body = "You received a new message from the Algometis contact form:\n\n";
        $email_body .= "Name: " . $name_sanitized . "\n";
        $email_body .= "Company Email: " . $company_email_sanitized . "\n";
        if (!empty($company_name_sanitized)) {
             $email_body .= "Company Name: " . $company_name_sanitized . "\n";
        }
        $email_body .= "\nMessage:\n" . wordwrap($message_sanitized, 70, "\n") . "\n";


        // Create a new PHPMailer instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            // --- Server Settings --- 
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output for troubleshooting
            $mail->SMTPDebug = SMTP::DEBUG_OFF;     // Disable debug output for production
            $mail->isSMTP();                        // Send using SMTP
            
            // ** REPLACE THESE WITH YOUR ACTUAL SMTP CREDENTIALS **
            $mail->Host       = 'smtp.office365.com';//'YOUR_SMTP_HOST';        // e.g., 'smtp.gmail.com' or 'smtp.sendgrid.net'
            $mail->SMTPAuth   = true;                    // Enable SMTP authentication
            $mail->Username   = 'hello@algometis.com';    // Your SMTP username (often your full email address)
            $mail->Password   = 'alg0m#tis2025';    // Your SMTP password (or App Password for services like Gmail)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption (or PHPMailer::ENCRYPTION_SMTPS for SSL)
            $mail->Port       = 587;                     // TCP port (587 for TLS, 465 for SSL)
            // ***************************************************

            // --- Recipients ---
            $mail->setFrom($company_email_sanitized, $name_sanitized); // Set From address (using user's details)
            $mail->addAddress($recipient_email);     // Add your receiving email address
            $mail->addReplyTo($company_email_sanitized, $name_sanitized); // Set Reply-To to the user's email

            // --- Content ---
            $mail->isHTML(false);                   // Set email format to plain text
            $mail->Subject = $email_subject;
            $mail->Body    = $email_body;

            // --- Send Email ---
            $mail->send();
            
            // --- Success: Redirect ---
            header("Location: " . $redirect_url);
            exit; // Stop script execution after redirect

        } catch (Exception $e) {
            // --- Email Sending Failed using PHPMailer ---
            $form_message = "Message could not be sent. Please try again later."; // User-friendly message
            // $form_message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; // Detailed error (for debugging only!)
            $form_error = true; 
            // Log the detailed error for the admin/developer
            error_log("PHPMailer error: " . $mail->ErrorInfo . " for submission from " . $company_email_sanitized);
        }
    }
} // End of POST request processing

// Include header *after* potential redirect logic
include 'header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Contact Us - Algometis'; ?></title>
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="stylesheet" href="css/animations.css"> <link rel="stylesheet" href="css/components.css"> </head>
<body>

<?php // If header include belongs inside body, move it here ?>

<main>

    <section class="bg-gray-100 py-16 md:py-20 text-center animate-fade-in">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 tracking-tight leading-tight">
                Contact Us
            </h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Ready to enhance your QA process or have a question about our services? Please use the form below or contact us directly. We're here to help.
            </p>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-2xl">
            
            <?php 
            // Display error message ONLY if there was an error AND we didn't redirect
            if ($form_error && !empty($form_message)) {
                echo '<p class="text-red-600 bg-red-50 p-4 rounded-md mb-6">' . htmlspecialchars($form_message) . '</p>';
            }
            ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="space-y-6">
                
                 <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" id="name" required value="<?php echo $form_error ? htmlspecialchars($_POST['name'] ?? '') : ''; ?>"
                           class="w-full px-4 py-2 border <?php echo ($form_error && empty(trim($_POST['name'] ?? ''))) ? 'border-red-500' : 'border-gray-300'; ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="company_email" class="block text-sm font-medium text-gray-700 mb-1">Company Email <span class="text-red-500">*</span></label>
                    <input type="email" name="company_email" id="company_email" required value="<?php echo $form_error ? htmlspecialchars($_POST['company_email'] ?? '') : ''; ?>"
                           class="w-full px-4 py-2 border <?php echo ($form_error && (empty(trim($_POST['company_email'] ?? '')) || !filter_var(trim($_POST['company_email'] ?? ''), FILTER_VALIDATE_EMAIL))) ? 'border-red-500' : 'border-gray-300'; ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="company_name" class="block text-sm font-medium text-gray-700 mb-1">Company Name</label>
                    <input type="text" name="company_name" id="company_name" value="<?php echo $form_error ? htmlspecialchars($_POST['company_name'] ?? '') : ''; ?>"
                           class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message / Your Needs <span class="text-red-500">*</span></label>
                    <textarea name="message" id="message" rows="5" required
                              class="w-full px-4 py-2 border <?php echo ($form_error && empty(trim($_POST['message'] ?? ''))) ? 'border-red-500' : 'border-gray-300'; ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"><?php echo $form_error ? htmlspecialchars($_POST['message'] ?? '') : ''; ?></textarea>
                </div>
                
                <div class="text-sm text-gray-500">
                    By submitting this form, you agree to our <a href="/privacy-policy" class="text-blue-600 hover:underline">Privacy Policy</a>.
                </div>

                <div>
                    <button type="submit" 
                            class="w-full md:w-auto inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            
             <h2 class="text-2xl md:text-3xl font-bold mb-6 md:mb-8">Other Ways to Reach Us</h2>
            
            <div class="space-y-4 md:space-y-0 md:flex md:justify-center md:space-x-12">
                <div class="text-lg text-gray-700">
                    <strong>Email:</strong> 
                    <a href="mailto:hello@algometis.com" class="text-blue-600 hover:underline">hello@algometis.com</a>
                </div>
                
                <div class="text-lg text-gray-700">
                     <strong>Phone:</strong> 
                     <a href="tel:+91XXXXXXXXXX" class="text-blue-600 hover:underline">+91 XXXX XXXXXX</a> 
                     </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-4 text-center max-w-3xl">

            <h2 class="text-2xl md:text-3xl font-bold mb-6 md:mb-8">Our Locations</h2>

            <p class="text-lg text-gray-700 mb-4">
                Algometis operates globally, with key presence in:
            </p>
            <div class="space-y-2 md:space-y-0 md:flex md:justify-center md:space-x-8 mb-6">
                 <span class="block md:inline-block text-lg text-gray-700">📍 Hyderabad, India</span>
                 <span class="block md:inline-block text-lg text-gray-700">📍 USA</span> 
                 </div>
            <p class="text-lg text-gray-600">
                Our teams collaborate across time zones. We aim to respond to all inquiries within 1-2 business days, regardless of your location.
            </p>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>

</body>
</html>