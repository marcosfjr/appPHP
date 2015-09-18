<?php
  require_once '../../conectar.class.php'; 
  require_once 'mpdf/mpdf.php';  

$html = '
        <h1><i>LISTAGEM DE VEICULOS</i></h1>
        <hr>
        <p>
        <table cellspacing="0" width="100%" border="1">
            <thead>
              <tr>
                <td width="7%" class="tc">Código</td>
                <td width="10%" class="tc">Marca</td>
                <td width="9%" class="tc">Modelo</td>
                <td width="9%" class="tc">Motor</td>
                <td width="9%" class="tc">Ano</td>  
                <td width="12%" class="tc">Preço</td>     
                <td width="8%" class="tc">Cavalos</td>      
                <td width="5%" class="tc">Etanol</td>
                <td width="5%" class="tc">gasolina</td>
                <td width="5%" class="tc">revisão</td>
                <td width="5%" class="tc">Seguro</td>
              </tr>
            </thead>
	<tbody>';
	while ($row=mysql_fetch_array($emps)) {
		 $html .= '<tr>';
         $html .= '<td>'.$row[cod_carro].'</td>';
		 $html .= '<td>'.$row[marca].'</td>';
		 $html .= '<td>'.$row[modelo].'</td>';
		 $html .= '<td>'.$row[motor].'</td>';
		 $html .= '<td>'.$row[ano].'</td>';
		 $html .= '<td>'.$row[preco].'</td>';
		 $html .= '<td>'.$row[cavalos].'</td>';
		 $html .= '<td>'.$row[etanol].'</td>';
		 $html .= '<td>'.$row[gasolina].'</td>';
		 $html .= '<td>'.$row[revisao].'</td>';
		 $html .= '<td>'.$row[seguro].'</td>';
		 $html .= '</tr>'; 
		 }		
	     $html .= '</tbody>		
         </table>';
 
$mpdf=new mPDF('c','A4','','',10,10,27,25,16,13); 
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;	
$mpdf->WriteHTML($stylesheet,1);	
$mpdf->WriteHTML($html,2);
$mpdf->Output('mpdf.pdf','I');
exit;
?>


