<?php
include 'includes/person.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Practice</title>
</head>

<body>
    <?php
    $person1 = new Person("SiaM", "Black", 28);
    echo $person1->name;
    $person1->setName("SaM");
    echo $person1->name;

    // $person2 = new Person();
    // $person2->setName("SiaM");
    // echo $person2->name;
    ?>
</body>

</html>