<?php
require_once './inc/cabecalho.php'; ?>

<h1>Listagem de modelos</h1>
<hr>
    <?php
        require_once './conectar.class.php';
    ?>

<table class="table">
    <thead>
        <tr class="ui-state-default">
            <th>Marca</th>
            <th>Modelo</th>
            <th>Motor</th>
            <th>Ano</th>
        </tr>
    </thead>
    <tbody>
        <?php
           while ($row = mysql_fetch_assoc($emps)) 
           {	
            echo "<tr>";
            ?>
                <td><?php echo $row['marca'] ?></td>
                <td><?php echo $row['modelo'] ?></td>
                <td><?php echo $row['motor'] ?></td>
                <td><?php echo $row['ano'] ?></td>
            <?php
            echo "</tr>";
           }
        ?>
    </tbody>

</table>   

<?php
require_once './inc/rodape.php';