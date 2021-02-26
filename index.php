<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-6</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>
</head>
<body>
<h1 class="uk-heading-divider uk-padding-small uk-text-center">PHP-6</h1>
<div class="uk-container">
<h1 class="uk-heading-divider uk-padding-small uk-text-center">Nivell 1</h1>
<div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <h4>Exercici 1</h4>
            <?php
            function resta($a,$b){
            return $a-$b;
            }
            ?>
            <p><?php echo resta(120, 60);?></p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <h4>Exercici 2</h4>
           
           <p>
                <?php 
              $edad=60;
            if($edad%2==0){
             echo "Es parell";
              }else{
               echo "Es imparell";
                }
           ?>
           </p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <h4>Exercici 3</h4>
        <?php
        function parell_o_imparell($num){
            if($num%2==0){
                echo "Es parell";
            }else{
                echo "Es imparell";
            }
        }
        ?>
        <p><?php echo parell_o_imparell(45);?></p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <h4>Exercici 4</h4>
        <p><?php
          for($num=1;$num <=10;$num++){
            echo $num ." ";
        }
        ?>
        </p>
        </div>
    </div>
</div>
<h1 class="uk-heading-divider uk-padding-small uk-text-center">Nivell 2</h1>
<div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <h4>Exercici 1</h4>
        <?php
        function contar(){
            for($a=2;$a <=10;$a+=2){
                echo $a ." ";
            }
        }
         ?>
         <p><?php echo contar();?></p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <h4>Exercici 2</h4>
        <?php
       function contarmax($max){
        for($a=2;$a <=$max;$a+=2){
            echo $a ." ";
        }
    }
         ?>
         <p><?php echo contarmax(20);?></p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <h4>Exercici 3</h4>
        <?php
            function contarmaxfix($max=10){
                for($a=2;$a <=$max;$a+=2){
                    echo $a ." ";
                }
            }
         ?>
         <p><?php echo contarmaxfix();?></p>
        </div>
    </div>
</div>
<h1 class="uk-heading-divider uk-padding-small uk-text-center">Nivell 3</h1>
<div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <h4>Exercici 1</h4>
         <?php 
           function olimpic($inici,$final){
            for($a=$inici;$a <=$final;$a+=4){
                echo $a ." ";
            }
        }
         ?>
         <p><?php echo olimpic(1968,2016);?></p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <h4>Exercici 2</h4>
        <?php
          function compra($xocolata,$xiclet,$caramel){
            $sub1 = $xocolata*1;
            $sub2 = $xiclet*0.5;
            $sub3 = $caramel*1.5;
            $total = $sub1+$sub2+$sub3;
            return $total;
        }
         ?>
          <p><?php echo compra(2,3,5);?></p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <h4>Exercici 2</h4>
        <?php 
          function cribaErastotenes($n)
          {
             $all=array();
             $prime=1;
             echo 1," ",2;
             $i=3;
             while($i<=$n)
             {
                  if(!in_array($i,$all))
                   {
                      echo " ",$i;
                      $prime+=1;
                      $j=$i;
                      while($j<=($n/$i))
                      {
                         array_push($all,$i*$j);
                         $j+=1;
                      }
                   }
                  $i+=2;
             }
             echo "\n";
             return;
          }
        ?>
         <p><?php echo cribaErastotenes(50);?></p>
        </div>
    </div>
</div>
<p class="uk-text-center uk-padding-small">Albert Sans-2021</p>

</div>
</body>
</html>