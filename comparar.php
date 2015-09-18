<?php
require_once './inc/cabecalho.php'; ?>

<h1>Comparação de modelos</h1>
<hr>
    <?php
        require_once './conectar.class.php';
        $carro1 = $_GET['carro1'];
        $carro2 = $_GET['carro2'];
        $contador1 = 0;
        $contador2 = 0;
    ?>

<form action="comparar.php" method="get" >
        <select name="carro1" id="carro1" class="form-control">
        <option value="">Selecione..</option>
        <?php while ($row = mysql_fetch_assoc($emps)):?>
            <option value="<?php echo $row['cod_carro']?>"><?php echo $row['modelo']?></option>
        <?php endwhile;?>
        </select>
    
        <select name="carro2" id="carro2" class="form-control">
        <option value="">Selecione..</option>
        <?php while ($row2 = mysql_fetch_assoc($emps2)):?>
            <option value="<?php echo $row2['cod_carro']?>"><?php echo $row2['modelo']?></option>
        <?php endwhile;?>
        </select>
    
    <button type="submit" value="teste" class="btn btn-primary">Comparar</button>
</form>

<div>
    <?php
    if($carro1 == $carro2):
        if(!empty($carro1)):?>
        <div id="msg" class="alert alert-warning">selecione carros diferentes.</div>
    <?php 
        endif;
    elseif(!empty($carro1) && !empty($carro2)):
        
        $sql1 = mysql_query('SELECT * FROM carro WHERE cod_carro='.$carro1); 
        $sql2 = mysql_query('SELECT * FROM carro WHERE cod_carro='.$carro2);
        $busca1 = mysql_fetch_array($sql1);
        $busca2 = mysql_fetch_array($sql2);
        ?> 
        <table class="table">
            <thead>
                <tr>
                    <th>Modelo</th>
                    <th><?php echo $busca1['modelo'];?></th>
                    <th><?php echo $busca2['modelo'];?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Preço</td>
                    <?php 
                    if($busca1['preco']<$busca2['preco']):
                        $contador1++;
                    else:
                        $contador2++;
                    endif;
                    ?>
                    <td>R$ <?php echo number_format($busca1['preco'], 2, ',', '.');?></td>
                    <td>R$ <?php echo number_format($busca2['preco'], 2, ',', '.');?></td>
                </tr>
                <tr>
                    <td>Cavalo (HP)</td>
                    <?php 
                    if($busca1['cavalos']>$busca2['cavalos']):
                        $contador1++;
                    else:
                        $contador2++;
                    endif;
                    ?>
                    <td><?php echo $busca1['cavalos'];?></td>
                    <td><?php echo $busca2['cavalos'];?></td>
                </tr>
                <tr>
                    <td>Consumo Etan.(KM/L)</td>
                    <?php 
                    if($busca1['etanol']>$busca2['etanol']):
                        $contador1++;
                    else:
                        $contador2++;
                    endif;
                    ?>
                    <td><?php echo $busca1['etanol'];?></td>
                    <td><?php echo $busca2['etanol'];?></td>
                </tr>
                <tr>
                    <td>Consumo Gas.(KM/L)</td>
                    <?php 
                    if($busca1['gasolina']>$busca2['gasolina']):
                        $contador1++;
                    else:
                        $contador2++;
                    endif;
                    ?>
                    <td><?php echo $busca1['gasolina'];?></td>
                    <td><?php echo $busca2['gasolina'];?></td>
                </tr>
                <tr>
                    <td>Valor Médio revisões</td>
                    <?php 
                    if($busca1['revisao']>$busca2['revisao']):
                        $contador1++;
                    else:
                        $contador2++;
                    endif;
                    ?>
                  <td>R$ <?php echo number_format($busca1['revisao'], 2, ',', '.');?></td>
                    <td>R$ <?php echo number_format($busca2['revisao'], 2, ',', '.');?></td>
                </tr>
                <tr>
                    <td>Valor Médio seguro</td>
                    <?php 
                    if($busca1['seguro']>$busca2['seguro']):
                        $contador1++;
                    else:
                        $contador2++;
                    endif;
                    ?>
                    <td>R$ <?php echo number_format($busca1['seguro'], 2, ',', '.');?></td>
                    <td>R$ <?php echo number_format($busca2['seguro'], 2, ',', '.');?></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>PONTUAÇÃO FINAL</td>
                    <td><?php echo $contador1?></td>
                    <td><?php echo $contador2?></td>
                </tr>
            </tfoot>
        </table>   
                
    <?php else:?>
        <div id="msg" class="alert alert-warning">selecione os dois carros.</div>  
    <?php endif;?>
</div>

<?php

require_once './inc/rodape.php';