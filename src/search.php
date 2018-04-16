<meta charset="utf-8" />
<?php

$bdd = new PDO('mysql:host=localhost;dbname=espc;charset=utf8','root','');

$articles = $bdd->query('SELECT title FROM news ORDER BY id DESC');
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $articles = $bdd->query('SELECT title FROM news WHERE title LIKE "%'.$q.'%" ORDER BY id DESC');
   if($articles->rowCount() == 0) {
      $articles = $bdd->query('SELECT title FROM news WHERE CONCAT(title, description) LIKE "%'.$q.'%" ORDER BY id DESC');
   }
}
?>
<form method="GET">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
</form>
<?php if($articles->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $articles->fetch()) { ?>
      <li><?= $a['title'] ?></li>
   <?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour: <?= $q ?>....
<?php } ?>