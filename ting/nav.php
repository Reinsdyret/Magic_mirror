<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    
    
</head>
<body>
<nav id="admin_user">

<ul id="admin_user_liste">
<li class="au_liste_innhold"><a <?php if(isset($_SESSION['id'])) {echo"href=\"../../magicmirror/admin.php\"";}else echo"href=\"../../magicmirror/login/login.php\"" ?>><h2 class="au_link">Kontroll Panel</h2><a></li>
<li class="au_liste_innhold" ><a <?php if(isset($_SESSION['id'])) {echo"href=\"../../magicmirror/huskeliste/huskeliste.php\"";}else echo"href=\"../../magicmirror/login/login.php\"" ?>><h2 class="au_link" id="huskeliste_link">Huskeliste</h2></a></li>
<li class="au_liste_innhold" id="forhandsvisning"><a <?php if(isset($_SESSION['id'])) {echo"href=\"../../magicmirror/user.php\"";}else echo"href=\"../../magicmirror/login/login.php\"" ?>><h2 class="au_link">Forhåndsvisning</h2></a></li>

<ul>
</nav>
    
</body>
</html>