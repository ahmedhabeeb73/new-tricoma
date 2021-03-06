<!--config file--php-->
<?php
 //session
session_start();



//config file
include __DIR__ . '/../../config/app.php';
//dbfile
include __DIR__ . '/../../config/db.php';
?>

<!--html-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $config['App_Url'] ?>admin/css/style.css">
   
  <title><?php echo $config['App_Name'] .  " | "  . $title ?> </title>
</head>
<body>
<?php if(isset($_SESSION['logged_in'])): ?>
<nav>
<div class="logo">
Gästebuch.
</div>
<ul>
<li><a href="<?php echo $config['App_Url'] ?>">Hauptseite </a></li>
<li><a href="<?php echo $config['App_Url'] ?>admin/index.php">Dashboard</a></li>
<li><a href="<?php echo $config['App_Url']; ?>admin/messages/messages.php">Kommentare</a></li>
<li><a href="<?php echo $config['App_Url'] ?>admin/users/index.php">Benutzer</a></li>
  
 
  <li><a class="register" href="logout.php">Logout</a></li>
 



</ul>
</nav>

<header>
<button id="toggle" class="toggle">
<i class="fa fa-bars fa-2x"></i>
</button>

</header>
<div class="container">
<?php endif ?>
<?php include'successmsg.php' ;?>