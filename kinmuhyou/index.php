<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">

    <title>JavaScript</title>
    <style>
        body {
            background: #eee;
        }
        form {
            max-width: 200px;
            margin: 40px auto;
            background: white;
            padding: 10px;
        }
        input {
            display: block;
            margin: 10px auto;
            padding: 4px;
        }
        .submit{
            border: none;
            background: crimson;
            color: white;
            padding: 10px;
            font: bold;
        }
        h5 {
            text-align: center;
        }

        .success {
            border: 2px solid limegreen;
        }

        .error {
            border: 2px solid crimson;
        }

    </style>
</head>
<body>
    <form action="" class="signup-form">
        <h5>バリデーションチェック</h5>
        <input type="text" id="username" >

        <input type="submit" value="submit" class="submit">
        <div class="feedback"></div>
    </form>

    <script src="sandbox.js"></script>
</body>
</html>