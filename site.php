<?php

include 'config.php';
include 'database.php';
include 'config_help.php';

$dbConnection = connectToDatabase();
$messageBoardCategories = getCategory($dbConnection);
$messageBoardItems = getItems($dbConnection);

$config = [
    'tableHeaders' => [
        'email' => 'email',
        'category' => 'Category',
        'title' => 'Heading',
        'description' => 'Description'
    ]
];

?>

<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="UTF-8">
</head>

<body>
<form action="3.php" method="POST">
    E-mail: 
    <input type="text" name="email" /><br>
    <br>
    Category:
    <select name="category">
        <option>f</option>
        <option>s</option>
        <option>t</option>
    </select>
    <br>
    <br> 
    Heading:
    <input type="text" name="heading"><br>
    <br>
    Description:
    <textarea rows="5" cols="50" name="description"></textarea><br>
    <br>
    <input type="submit" value="отправить">
</form>
</body>

</html>