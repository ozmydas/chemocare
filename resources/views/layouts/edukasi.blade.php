<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #E9F9E7;
            color: #333;
            line-height: 1.6;
        }

        .container {
            /* max-width: 600px; */
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

        .btn-custom {
            background-color: #59AE4E;
            color: white;
            border: none;
            padding: 15px 25px;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
            cursor: pointer;
        }

        .btn-custom:hover {
            background-color: #45a03a;
            transform: scale(1.05);
        }

        .btn-custom:active {
            transform: scale(0.95);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
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


        {{--  --}}

        @yield('content')

        {{--  --}}

    </div>
</body>

</html>
