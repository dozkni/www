<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Магазин 1С</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
require('templates/header.php');
$page = $_GET['page']??'';
if (!isset($_GET['page'])) {
    require('templates/main.php');
} elseif ($page == 'catalog') {
    require('templates/catalog.php');
} elseif ($page == 'contacts') {
    require('templates/contacts.php');
} elseif ($page == 'buh') {
    require('templates/catalog/buh.php');
} elseif ($page == 'zup') {
    require('templates/catalog/zup.php');
} elseif ($page == 'retail') {
    require('templates/catalog/retail.php');
}
require('templates/footer.php');
?>

</body>

</html>