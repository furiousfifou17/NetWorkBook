
<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>NetWorkBook</title>
        <link rel="stylesheet" href="css/style.css">
        <header class="header">
            
        </header>
    </head>
    <?php
  	if (isset($_GET["page"]))
   		{
   		$page = $_GET["page"];
   		}
	else
   		{
   		$page="accueil";
   		}
  	?>
<body>
<nav>
    <ul class="menu">
        <li><a href="index.php?page=accueil">Accueil</a></li>
        <li><a href="index.php?page=documentation">Documentation</a></li>
        <li><a href="index.php?page=telechargements">Téléchargements</a></li>
    </ul>
</nav>
<div class="contenu">
        <?php
            include ($page.'.php');
        ?>
</div>


</body>

</html>