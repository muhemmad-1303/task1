<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $name="Muhammed Bin Abdul Razak V P";
  $number=8086881303;
  $adress="abc road";
  $pin=1303;
  $education=array("abc school","ram hss school","cev");
  $skils=array("html","css","javascript");
?>
  <h1><?php echo $name ;?></h1>
  <h5><?php echo "Number:",$number;?></h5>
  <p><?php echo "Adress :",$adress,"<br>","pin:",$pin ;?></p>
  <?php echo "<hr>" ?>
  <h3><?php echo "Education"?></h3>
  <ol>
    <?php
       foreach($education as $key){
        echo "<li>$key</li>";
       } ?>
  </ol>
  <?php echo"<hr>" ?>
  <h2><?php echo "Skills" ?></h2>
  <ol>
  <?php
       foreach($skils as $key){
        echo "<li>$key</li>";
       } ?>
       
  </ol>
</body>
</html>
  
  
  
  
  
  




