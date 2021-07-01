<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = 'root';
$dbdatabase = `ijdb`;

try {
    $pdo = new PDO(
        "mysql:host=$dbhost;dbname=$dbdatabase",
        $dbuser,
        $dbpassword
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $output = 'Database connect established.';
} catch (PDOException $e) {

    $output = 'Unable to connect to the database: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}
// var_dump($pdo);
$pdo = null;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo $output; ?></p>
</body>

</html>