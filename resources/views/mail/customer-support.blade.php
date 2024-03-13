<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Support</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .email-content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="email-container">
    <h2>Customer Support</h2>
    <div class="email-content">
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $sender }}</p>
        <p><strong>Message:</strong> {{ $content }}</p>
    </div>
</div>
</body>
</html>
