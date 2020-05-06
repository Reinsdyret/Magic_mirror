<?php
require('connect.php') ?>



<html>
  <head>
        <title>Front page</title>
        <meta charset="utf-8">
  </head>
  <body>

    
    <form action="registrer_check.php" method="post">
            <input type="text"
                 name="username" id="username"
                 placeholder="Username">
            <input type="text"
                 name="navn" id="navn"
                 placeholder="Navn">
            <input type="email"
                 name="email" id="email"
                 placeholder="Email">
            <input type="password"
                 name="password" id="password"
                 placeholder="Password">
            <input type="submit" value="Registrer">
        </form>
    </body>
    </html>