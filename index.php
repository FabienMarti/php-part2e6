<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            $age = 18;
            if($age >= 18){
                echo('Tu es majeur');
            }else{
                echo('Tu es mineur');
            }
        ?>
    </p>
</body>
</html>