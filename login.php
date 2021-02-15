<?php session_start();

/*Vérifier si le formulaire est soumis*/

if (isset($_POST['Submit'])){
    /*Vérifier si l'utilisateur existe à l'aide d'une base de donnée (tableau)*/
    $logins = array ('test@test.fr' => 'test', 'truc@truc.fr'=>'truc', 'bidule@bidule.fr'=>'bidule');

    /*Vérifier et assigner le mdp et le nom d'utilisateur soumis à une variable*/

    $username = isset($_POST['Email']) ? $_POST['Email'] : '';

    $password = isset($_POST['Password']) ? $_POST['Password'] : '';

   /*Vérifier si le mdp et le nom d'utilisateur existent dans le tableau*/

   if (isset($logins[$username]) && $logins[$username]) == $password){

    /*On set les variables en session e on le redirige vers une autre page */

    $_SECTION['USER'] = $logins[$username];
    header ('location: index.php');
    exit();
   }else {
       /*Si la vérification à échoué, on va set un message d'érreur*/

       $message = "<span style= 'color: red'>Identifiants invalides</span>";
   }

}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./CSS/Style.css" rel="stylesheet" type="text/CSS">
    <title>Document</title>
</head>

<body>

   <?php include ('src/header.php');?>
   
   <section>
        <table class="Table">
         <tr>
             <td>Email</td>
             <td><input type="email" class="Input" name="Email"></td>
         </tr>
         <tr>
             <td>Mot de Passe</td>
             <td><input type="password" class="Password" name="Input"></td>
         </tr>
         <tr>
             <td>&nbsp;</td>
             <td><input type="submit" class="button" name="Submit"></td>
         </tr>
    </section>
    
    <?php include ('src/footer.php');?>   

</body>
</html>