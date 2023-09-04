<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #E9F9E7;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
        }

        h1 {
            color: #59AE4E;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            text-align: center;
        }

        .heart-icon {
            color: #59AE4E;
            font-size: 50px;
            display: block;
            text-align: center;
            margin: 20px 0;
        }
    </style>

    <script>
        function closeModal() {
            window.parent.postMessage('closeModal', '*');
        }
    </script>
</head>

<body>
    <div class="container">
        <i class="fas fa-heart heart-icon"></i>
        <h1>Terima Kasih!</h1>
        <p>Terima kasih telah melengkapi biodata diri Anda. Kesehatan Anda adalah prioritas kami. Mari menjaga kesehatan
            bersama!</p>

        <button onclick="closeModal()">Tutup Modal</button>
    </div>
</body>

</html>
