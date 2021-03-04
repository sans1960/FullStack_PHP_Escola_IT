<?php include '../templates/header.php';?>
<div class="uk-container">
<div class="uk-card uk-card-default uk-margin-medium-top uk-card-body uk-width-1-1@m">
    <h3 class="uk-card-title">Actualitzar Compra</h3>
    <form class="uk-grid-small" action="../controllers/upCompraController.php" method="POST" uk-grid>
   
    <div class="uk-width-1-2@s">
        <input name="nom" class="uk-input" type="text" value="<?php echo $row['nom'];?>" >
    </div>
    <div class="uk-width-1-2@s">
        <input name="quantitat" class="uk-input" type="number" value="<?php echo $row['quantitat'];?>" min="0" step="0.01" >
    </div>
    <div class="uk-width-1-2@s">
        <input name="preu" class="uk-input" type="number"  min="0" step="0.01" value="<?php echo $row['preu'];?>">
    </div>
    <div class="uk-width-1-2@s">
        <input name="subtotal" class="uk-input" type="number" min="0" step="0.01" value="<?php echo $row['subtotal'];?>">
    </div>
    <div class="uk-width-1-4@s">
        <input class="uk-button" type="submit" value="Actualitzar">
    </div>
    <div class="uk-width-1-4@s">
        <input class="uk-input" name="id" value="<?php echo $row['id'];?>">
    </div>
    
</form>
    
</div>
</div>
</body>
</html>