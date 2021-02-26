<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>
</head>
<body>
<h1 class="uk-heading-divider uk-padding-small uk-text-center">PHP-5</h1>
<div class="uk-container">
<h1 class="uk-heading-divider uk-padding-small uk-text-center">Nivell 1</h1>
<div class="uk-card uk-card-default uk-card-body uk-text-center">
 <h4>Exercici 1</h4>
                         <?php 
                    $a = 12;
                    $b = 45.87;
                    $c = 'Bona tarda companys del curs :';
                    $d = true;
                    $e = " Em dic Albert";
                    $f = $c.$e;
                    define('NOM','Albert Sans Climent');

                ?>
                <p><?php echo "Variable integer : " .$a; ?></p>
                <p><?php echo "Variable double : " .$b; ?></p>
                <p><?php echo "Variable string : " .$c; ?></p>
                <p><?php echo "Variable boolean : " .$d; ?></p>
                <h4>Exercici 2 :</h4>
                <p><?php echo "La longitud de la variable  " .$c." es : " .strlen($c); ?></p>
                <p><?php echo "La longitud de la variable  " .$e." es : " .strlen($e); ?></p>
                <p><?php echo $f; ?></p>
                <h4>Exercici 3 :</h4>
                <p><?php echo NOM ;?></p>
</div>
<h1 class="uk-heading-divider uk-padding-small uk-text-center">Nivell 2</h1>
<div class="uk-card uk-card-default uk-card-body uk-text-center ">
   <h4>Exercici 1,2,3:</h4>
                <?php

                $primerarray = array(21,34,55,65,75);
                $segonarray = array(87,98,124);
                $segonarray[]=134;
                $resultat = array_merge($primerarray,$segonarray);
                 ?>
                 <p><?php echo "El tamany del array final es : " .count($resultat);?>
                        
</div>
 <h1 class="uk-heading-divider uk-padding-small uk-text-center">Nivell 3</h1>
<div class="uk-card uk-card-default uk-card-body uk-text-center">
    <h4>Exercici 1 :</h4>
                <?php

               
                $segonarray[]=134;
                             
                 ?>
                 <p>
                 <?php
                 foreach($resultat as $valor){
                     echo $valor ."  ";

                 }
                  ?>
                 </p> 
</div>
<div class="uk-card uk-card-default uk-card-body uk-text-center ">
    <h4>Exercici 2 :</h4>
    
                 <?php
                 $X=34;
                 $Y= 21;
                 $M=67.32;
                 $N=45.98;
                 $sumaxy= $X+$Y;
                 $restaxy = $X-$Y;
                 $multxy = $X*$Y;
                 $divxy = $X/$Y;
                 $modxy = $X%$Y;
                 $sumamn= $M+$N;
                 $restamn = $M-$N;
                 $multmn = $M*$N;
                 $divmn = $M/$N;
                 $modmn = $M%$N;
                 $sumatotal = $X + $Y + $M + $N;
                 $productetotal = $X*$Y*$M*$N;
                  ?>
                  <p><?php echo "El valor de X es : " .$X;?></p>
                  <p><?php echo "El valor de Y es : " .$Y;?></p>
                  <p><?php echo "El valor de X + Y es : " .$sumaxy;?></p>
                  <p><?php echo "El valor de X - Y es : " .$restaxy;?></p>
                  <p><?php echo "El valor de X * Y es : " .$multxy;?></p>
                  <p><?php echo "El valor de X / Y es : " .$divxy;?></p>
                  <p><?php echo "El módul de X , Y es : " .$modxy;?></p>
                  <p><?php echo "El valor de M es : " .$M;?></p>
                  <p><?php echo "El valor de N es : " .$N;?></p>
                  <p><?php echo "El valor de M + N es : " .$sumamn;?></p>
                  <p><?php echo "El valor de M - N es : " .$restamn;?></p>
                  <p><?php echo "El valor de M * N es : " .$multmn;?></p>
                  <p><?php echo "El valor de M / N es : " .$divmn;?></p>
                  <p><?php echo "El módul de M , N es : " .$modmn;?></p>
                  <p><?php echo "El doble de X es : " .$X*2;?></p>
                  <p><?php echo "El doble de Y es : " .$Y*2;?></p>
                  <p><?php echo "El doble de M es : " .$M*2;?></p>
                  <p><?php echo "El doble de N es : " .$N*2;?></p>
                  <p><?php echo "La suma de totes les variables es  : " .$sumatotal;?></p>
                  <p><?php echo "El producte de totes les variables  es : " .$productetotal;?></p>
</div>
<p class="uk-text-center uk-padding-small">Albert Sans-2021</p>
</div>
</body>
</html>
