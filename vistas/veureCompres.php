



<div class="uk-container" >
    <div class=" uk-flex uk-flex-right">
    <a href="vistas/afegircompra.php" uk-toggle="target: #my-id" class="uk-button uk-button-primary" uk-tooltip="Afegir compra" uk-icon="icon: plus"></a>
    </div>
    <div class="uk-overflow-auto">
    <table class="uk-table" >
    <caption>Compres</caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Quantitat</th>
            <th>Preu</th>
            <th>Subtotal</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
        <?php
         foreach($compres as $pd){?>
         <tr>
                    <td><?php echo $pd['nom']; ?></td>
                    <td><?php echo $pd['quantitat']; ?></td>
                    <td><?php echo $pd['preu']; ?></td>
                    <td><?php echo $pd['subtotal']; ?></td>
                    <td><a href="controllers/editarCompraController.php?id=<?php echo $pd['id'];?>" uk-icon="icon: pencil"></a></td>
                    <td><a href="controllers/deleteCompraController.php?id=<?php echo $pd['id'];?>" uk-icon="icon: trash"></a></td>


         </tr>

         <?php }?>
    
        
         <tr>
         <td colspan="3">Total</td>
         <td><?php echo $suma['total'];?> €</td>
         <td colspan="2"></td>
         </tr>

        
        
        </tbody>
    </thead>
    </table>
    </div>

</body>
</html>