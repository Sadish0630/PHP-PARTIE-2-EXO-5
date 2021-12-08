<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 2 EXO 5</title>
</head>

<body>
    <p>
        <?php
        $gender = 'femme';
        if ($gender != 'homme') {
            echo 'C\'est une développeuse !!!';
        } else {
            echo 'C\'est un développeur !!!';
        }
        ?>
    </p>

</body>

</html>