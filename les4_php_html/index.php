<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header{
            background-color: grey;
            padding: 2em;
            text-align: center;
        }

    </style>
</head>
<body>
    <header>

        <h1>
            <?php 
                $name= htmlspecialchars($_GET['name']); // دا اللي بيظهر في اليرش من فوق وانا اللي بتكتبه بايدي
            echo "Hello ". $name;
            ?>
        </h1>
    </header>


</body>
</html>