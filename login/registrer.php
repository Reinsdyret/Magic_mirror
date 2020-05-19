<?php
require('../ting/connect_local.php');
include "../ting/header.php";
?>



<html>
  <head>
        <title>Front page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Roboto&display=swap" rel="stylesheet"> 
  </head>
  <body>
<main id="registrer_page">
    
    <form id="registrer_skjema"action="registrer_check.php" method="post">
     <label id="registrer_tittel">Registrer deg!</label>
     
                 <label for="navn">Navn</label>
            <input type="text"
                 name="navn" id="navn"
                 placeholder="Navn Navnsen" required>
                 <label for="email">E-mail</label>
            <input type="email"
                 name="email" id="email"
                 placeholder="email@email.com" required>
                 <label for="password">Passord</label>
            <input type="password"
                 name="password" id="password"
                 placeholder="Passord123" required>
            <input type="submit" value="Registrer">
        </form>
        </main>
    </body>
    </html>