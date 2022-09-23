<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    
    <ul>
        <?php foreach($task as $key => $part):?>
            <li><strong><?=$key . ':' ;?></strong><?=$part ;?> </li>
        
        <?php endforeach ;?>
    </ul>
</body>
</html>