<?php
// Optional: Set page title variable if your header.php uses it
$pageTitle = "Contact Us - Algometis"; 

// Form handling logic
$form_message = ''; // Message to display in case of error (no redirect)
$form_error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- Configuration ---
    $submissions_file = 'contact_submissions.txt'; // File to save submissions (ensure write permissions!)
    $redirect_url = "thank-you.php"; // Page to redirect to on success
    
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

    // --- If Validation Passes, Attempt to Save to File ---
    if (!$form_error) {
        // Sanitize data using htmlspecialchars (replaces deprecated FILTER_SANITIZE_STRING)
        $name_sanitized = htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); 
        $company_email_sanitized = filter_var($company_email, FILTER_SANITIZE_EMAIL); // Keep this specific filter
        $company_name_sanitized = htmlspecialchars($company_name, ENT_QUOTES, 'UTF-8'); 
        $message_sanitized = htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); 

        // --- Construct Data String for File ---
        $timestamp = date("Y-m-d H:i:s T"); // e.g., 2025-04-16 13:50:31 IST
        $entry = "Timestamp: " . $timestamp . "\n";
        $entry .= "Name: " . $name_sanitized . "\n";
        $entry .= "Company Email: " . $company_email_sanitized . "\n";
        if (!empty($company_name_sanitized)) {
             $entry .= "Company Name: " . $company_name_sanitized . "\n";
        }
        $entry .= "Message:\n" . $message_sanitized . "\n";
        $entry .= "----------------------------------------\n\n"; // Separator

        // --- Save Data to File ---
        // Use FILE_APPEND to add to the file, LOCK_EX for basic concurrency control.
        // IMPORTANT: Ensure the web server (e.g., www-data, apache) has write permissions 
        // to the directory containing this file or to the file itself.
        if (file_put_contents($submissions_file, $entry, FILE_APPEND | LOCK_EX) !== false) {
            // --- Success: Redirect ---
            header("Location: " . $redirect_url);
            exit; // Important: stop script execution after redirect
        } else {
            // --- File Writing Failed ---
            $form_message = 'Sorry, there was an error processing your request. Please try again later.';
            $form_error = true; 
            // Optional: Log this error for server admin
            error_log("Failed to write to contact submissions file: " . $submissions_file);
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
    <link rel="stylesheet" href="css/styles.css"> <?php // ?>
    <link rel="stylesheet" href="css/animations.css"> <?php // If needed ?>
    <link rel="stylesheet" href="css/components.css"> <?php // If needed ?>
</head>
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
                    <input type="text" name="name" id="name" required value="<?php echo $form_error ? htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8') : ''; ?>"
                           class="w-full px-4 py-2 border <?php echo ($form_error && empty(trim($_POST['name'] ?? ''))) ? 'border-red-500' : 'border-gray-300'; ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="company_email" class="block text-sm font-medium text-gray-700 mb-1">Company Email <span class="text-red-500">*</span></label>
                    <input type="email" name="company_email" id="company_email" required value="<?php echo $form_error ? htmlspecialchars($_POST['company_email'] ?? '', ENT_QUOTES, 'UTF-8') : ''; ?>"
                           class="w-full px-4 py-2 border <?php echo ($form_error && (empty(trim($_POST['company_email'] ?? '')) || !filter_var(trim($_POST['company_email'] ?? ''), FILTER_VALIDATE_EMAIL))) ? 'border-red-500' : 'border-gray-300'; ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="company_name" class="block text-sm font-medium text-gray-700 mb-1">Company Name</label>
                    <input type="text" name="company_name" id="company_name" value="<?php echo $form_error ? htmlspecialchars($_POST['company_name'] ?? '', ENT_QUOTES, 'UTF-8') : ''; ?>"
                           class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message / Requirements <span class="text-red-500">*</span></label>
                    <textarea name="message" id="message" rows="5" required
                              class="w-full px-4 py-2 border <?php echo ($form_error && empty(trim($_POST['message'] ?? ''))) ? 'border-red-500' : 'border-gray-300'; ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"><?php echo $form_error ? htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
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