<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title>PHP lydės ir <?php print(date('Y m d', strtotime('+'.rand(1,10).' year')));?></title>
  </head>
  <?php $spalva=rand(0,255); ?>
  <body style='background-color:<?php printf( "#%06X\n", rand( 0, 0x222222 )); ?>'>
     
      <h1 style='font-size:<?php print(rand(16,200));?>'><?php print 'Edgaras' ?> - Galbūt turėsiu <?php print rand(1,5).' vaikų(us).';?></h1>
     
      <p style='color:<?php printf( "#%06X\n", rand( 0, 0x222222 )); ?>'>D. Trump'as nebebus prezidentu 
          <?php print date('Y m d', strtotime('+'.rand(1,100).' year'));
                 ?>
              </p>
    
   </body>
</html>


