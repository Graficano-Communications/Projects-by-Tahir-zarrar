<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        /* General reset */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            font-size: 24px;
            border-bottom: 2px solid #BD0D19;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #BD0D19;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        .footer-note {
            font-size: 14px;
            color: #666;
            margin-top: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>Contact Form Submission from Black Bear</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ $comment }}</td>
            </tr>
        </table>
        <p class="footer-note">Thank you for reaching out to us. We will get back to you shortly.</p>
    </div>
</body>
</html>
