<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>
    <ul>

    </ul>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean with associative array</title>
</head>
<body>
    <ul>
        <li>
            <strong>Name : </strong> <?= $task['title'];?>
         </li>

         <li>
            <strong>Due Time : </strong><?= $task['due'];?>
         </li>
         <li>
            <strong>Personal Responsibility : </strong><?=$task['assigned_to'];?>
         </li>
         <li>
            <strong>Status : </strong> <?= $task['completed'] ;?>

            <!-- <?php if($task['completed']) {
                echo 'Incompleted';
            }else{
                echo 'Completed';
            }
            ?>  -->
            <!--OR-->
            <?php if($task['completed']) : ?>
                Incompleted
            <?php else : ?>
                Completed
            <?php endif ; ?>
         </li>
    </ul>
</body>
</html>