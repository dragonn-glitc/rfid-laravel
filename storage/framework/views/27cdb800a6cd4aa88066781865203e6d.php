<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>RFID Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #121212;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            color: #fff;
        }

        .card {
            background: #1e1e1e;
            padding: 30px 40px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.6);
            text-align: center;
            width: 340px;
            border: 1px solid #2c2c2c;
        }

        h2 {
            margin-bottom: 12px;
            color: #ffffff;
            letter-spacing: 1px;
        }

        .status {
            font-size: 16px;
            color: #cccccc;
            margin-top: 15px;
        }

        .dot {
            font-size: 26px;
            animation: blink 1.5s infinite;
            color: #888;
        }

        @keyframes blink {
            0% { opacity: 0.2; }
            50% { opacity: 1; }
            100% { opacity: 0.2; }
        }
    </style>
</head>
<body>

<div class="card">
    <h2> RFID System</h2>
    <p class="status">
        Menunggu kartu RFID
        <span class="dot">• • •</span>
    </p>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\rfid-laravel\resources\views/rfidview.blade.php ENDPATH**/ ?>