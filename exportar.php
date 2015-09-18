<?php  
 // Require no script da classe reportCliente  
    require_once './inc/cabecalho.php'; 
 ?>  
 
 <!DOCTYPE html>  
 <h1>Exportação</h1>
 <html>  
   <head>  
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
     <title>Testando relatório com mPDF</title>  
   </head>  
   <body>  
      <form action="arquivos/export/report.php" method="GET" target="_blank">  
       <input type="submit" value="Gerar relatório" name="submit" class="btn btn-primary"/>  
     </form>  

   </body>  
 </html>  



<?php
require_once './inc/rodape.php';