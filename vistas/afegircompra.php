<?php include '../templates/header.php';?>
<div class="uk-container">
<div class="uk-card uk-card-default uk-margin-medium-top uk-card-body uk-width-1-1@m">
    <h3 class="uk-card-title">Afegir Compra</h3>
    <form class="uk-grid-small" action="../controllers/afegirCompraController.php" method="POST" uk-grid>
   
    <div class="uk-width-1-2@s">
        <input name="nom" class="uk-input" type="text" required placeholder="Nom">
    </div>
    <div class="uk-width-1-2@s">
        <input name="quantitat" class="uk-input" type="number" required min="0" step="0.01" placeholder="Quantitat">
    </div>
    <div class="uk-width-1-2@s">
        <input name="preu" class="uk-input" type="number" required min="0" step="0.01" placeholder="Preu">
    </div>
    <div class="uk-width-1-2@s">
        <input name="subtotal" class="uk-input" type="number" required min="0" step="0.01"  placeholder="Subtotal">
    </div>
    <div class="uk-width-1-4@s">
        <input class="uk-button" type="submit" value="Afegir">
    </div>
</form>
    
</div>
</div>
<div class="uk-container uk-margin-medium-top">
    <p class="uk-text-center"> Albert Sans 2021</p>
        </div>
</body>
</html>