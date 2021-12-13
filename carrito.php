<?php 



?>

<br>
<h3>lista del carrito</h3>
<table class="table table-light">
    <tbody>
        <tr>
            <th width="40%">descripcion</th>
            <th width="15%">cantidad</th>
            <th width="20%">presio</th>
            <th width="20%">total</th>
            <th width="5%">--</th>
        </tr>
        <tr>
            <td width="40%">descripcion</td>
            <td width="15%">cantidad</td>
            <td width="20%">presio</td>
            <td width="20%">total</td>
            <td width="5%"><button class="btn btn-danger" type="button">eliminar</button></td>
        </tr>

        <?php foreach($_SESSION['carrito'] as $indice=>$producto) {?>
        <tr>
            <td width="40%">descripcion</td>
            <td width="15%">cantidad</td>
            <td width="20%">presio</td>
            <td width="20%">total</td>
            <td width="5%"><button class="btn btn-danger" type="button">eliminar</button></td>
        </tr>
        <!-- <tr>
            <td colspan="3" align="right"><h3>total</h3></td>
            <td align="right"><h3>$<?php echo number_format(); ?></h3></td>
            <td></td>
        </tr> -->
    </tbody>
</table>
    