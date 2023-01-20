<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="style1.css">
    <title>Lab4</title>
</head>
<body>
<?php
if (isset($_GET['page_layout'])){
    switch ($_GET['page_layout']){
        case 'list':
            require_once 'list.php';
            break;
        case 'create':
            require_once './CRUD/create.php';
            break;
        case 'update':
            require_once './CRUD/update.php';
            break;
        case 'delete':
            require_once './CRUD/delete.php';
            break;
    }
} else{
    require_once 'list.php';
}
?>
</body>
</html>