<?php
    $GLOBALS['cnnct'] = new mysqli("localhost", "root", "", "mysql");
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="styles.css">
    <title>Lab5</title>
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