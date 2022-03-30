<?php
    require_once 'config/db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"></link>
    <title>Demo PHP</title>
</head>
<body>
    <?php
    if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
            case 'list':
                require_once 'product/list.php';
                break;

            case 'add':
                require_once 'product/add.php';
                break;

            case 'delete':
                require_once 'product/delete.php';
                break;

            case 'update':
                require_once 'product/update.php';
                break;

            default:
                require_once 'product/list.php';
                break;

        }
    }
    ?>
</body>
</html>