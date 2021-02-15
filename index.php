<?php session_start();/*On commence la session*/

/* Une session est une manière temporaire de stocker (côyé serveur)*/


 if (!isset($_SESSION['User'])){  
     /*  S_SESSION = variable super globale 
    (contenu dans le script qu'il soit local ou global */
     header("location:login.php"); 
     exit;  
 }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./CSS/Style.css" rel ="stylesheet" type="text/CSS">
    <title>Netflix Sans BDD</title>
</head>
<body>

<?php include ('src/header.php');?>

<section>
    <div id = "login-body">
    </div>
</section>

<?php include ('src/header.php');?>

</body>
</html>