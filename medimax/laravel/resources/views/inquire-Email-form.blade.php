<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
    <p>Dear {{ $data['name'] }},</p>
    
    <p>Thank you for reaching out ! We have received your inquire and will get back to you as soon as possible.</p>

    <p>Here are the details of your submission:</p>
    <ul>
        <li><strong>Name:</strong> {{ $data['name'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Product:</strong> {{ $data['product_name'] }}</li>
        <li><strong>Quantity:</strong> {{ $data['quantity'] }}</li>
        <li><strong>phone:</strong> {{ $data['phone'] }}</li>
        <li><strong>Message:</strong> {{ $data['message'] }}</li>
    </ul>
 
    <p>We appreciate your interest in our Products.</p>
    
    <p>Best regards,<br>
   Unik Technology</p>
</body>
</html>
