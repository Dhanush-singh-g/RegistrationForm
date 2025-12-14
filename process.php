<?php
// process.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect and sanitize all form data
    $fullName = isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : 'N/A';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'N/A';
    $mobile = isset($_POST['mobile']) ? htmlspecialchars($_POST['mobile']) : 'N/A';
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : 'N/A';
    $address = isset($_POST['address']) ? nl2br(htmlspecialchars($_POST['address'])) : 'N/A'; // nl2br converts newlines to <br>
    $course = isset($_POST['course']) ? htmlspecialchars($_POST['course']) : 'N/A';


    // Display the success message and submitted information
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Success</title>
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>

        <div class="container success-message">
            <h1>✅ Registration Successful!</h1>
            <p>Thank you, **<?php echo $fullName; ?>**, for registering. Your details have been successfully received.</p>
            
            <div class="details-box">
                <h3>Your Submitted Information:</h3>
                
                <p><strong>Full Name:</strong> <?php echo $fullName; ?></p>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <p><strong>Mobile:</strong> <?php echo $mobile; ?></p>
                <p><strong>Gender:</strong> <?php echo $gender; ?></p>
                
                <hr style="border: 1px solid #c3e6cb; margin: 15px 0;">
                
                <p><strong>Course Selected:</strong> <?php echo $course; ?></p>
                <p><strong>Address:</strong> <br><?php echo $address; ?></p>
                
                
                <p style="margin-top: 20px;">We will process your application shortly.</p>
            </div>
            
            <p style="margin-top: 30px;"><a href="index.html">Go back to the Registration Form</a></p>
        </div>

    </body>
    </html>
    <?php

} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit();
}

?>