<?php

require_once 'init.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="stylesheet" href="./style.css">

    <title>Mon portfolio</title>
  </head>
  <body>

<header>
  <div class="nav">
    <div class="imgLogo">
      <a href="index.php"><img class="logo" src="img/logo.jpg" alt=""></a>  
    </div>
    <div class="link"> 
      <nav>
        <ul>             
          <li>
            <a class="margin" href="projets.php">Projets</a>
          </li>                      
          <li>
            <a class="margin" href="#form">Contact</a>
          </li>             
          <li>
            <a class="margin" href="connexion.php">Connexion</a>
          </li>
            <?php if (userIsAdmin()) : ?>
          <li>
            <a class="margin" href="<?= URL ?>connexion.php?action=deconnexion">Déconnexion</a>
          </li>
            <?php endif ?>  
        </ul>        
      </nav>
    </div> 
  </div> 
</header>
 