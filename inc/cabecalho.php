<?php
$url = $_SERVER['SCRIPT_FILENAME'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>APP PHP</title>
        <link href="arquivos/css/bootstrap.min.css" rel="stylesheet">
        <link href="arquivos/css/jquery-ui.min.css" rel="stylesheet">
        <link href="arquivos/css/marcos.css" rel="stylesheet">
    </head>
    <body>
        
    <nav class="navbar navbar-inverse" role="navigation"> 
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> 
                </button>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">  
                    <li>
                        <a href="lista.php" <?php if($url == 'C:/xampp/htdocs/appPhp/lista.php'):?> class="ativo"<?php endif;?>>Listagem de modelos</a>
                    </li>
                    <li>
                        <a href="comparar.php" <?php if($url == 'C:/xampp/htdocs/appPhp/comparar.php'):?> class="ativo"<?php endif;?>>Comparação de modelos</a>
                    </li>
                    <li>
                        <a href="exportar.php" <?php if($url == 'C:/xampp/htdocs/appPhp/exportar.php'):?> class="ativo"<?php endif;?>>Exportação</a>
                    </li>

                </ul> 
            </div> 
        </div>
    </nav>
        
<div id="corpo">
       