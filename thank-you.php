<?php 
$pageTitle = "Message Sent - Algometis"; 
include 'header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Thank You - Algometis'; ?></title>
    <link rel="stylesheet" href="css/styles.css"> <?php // ?>
    <link rel="stylesheet" href="css/components.css"> <?php // If needed ?>
    <meta name="robots" content="noindex, nofollow"> 
</head>
<body>

<?php // If header include belongs inside body, move it here ?>

<main>
    <section class="py-20 md:py-32 bg-gray-100 text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-green-600 mb-4">Thank You!</h1>
            <p class="text-lg md:text-xl text-gray-700 mb-8">
                Your message has been received successfully. We will review your inquiry and get back to you within 1-2 business days.
            </p>
            <a href="/" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-md font-medium hover:bg-blue-700 transition duration-150 ease-in-out">
                Return to Homepage
            </a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

</body>
</html>