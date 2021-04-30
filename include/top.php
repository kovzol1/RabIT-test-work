<!--This is the head of the page-->
<?php include ("dbconn_pdo.php"); 
    header('Content-type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <title><?php print $title; ?></title> <!--printing the actual page title-->
    <link rel="stylesheet" href="css/rabit.css">
</head>

<body>
    <nav class="menu">
        <a href="index">Home</a>
        &nbsp;
        <a href="userlist">User list</a>
        &nbsp;
        <a href="advertisement">Advertisement list</a>
    </nav>