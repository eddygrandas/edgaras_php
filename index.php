<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <title>PHP lydės ir <?php print(date('Y m d', strtotime('+'.rand(1,10).' year')));?></title>
  </head>
  <body>
     
      <h1><?php print 'Edgaras' ?> - Galbūt turėsiu <?php print rand(1,5).' vaikų(us).';?></h1>
     
      <p>D. Trump'as nebebus prezidentu 
          <?php print date('Y m d', strtotime('+'.rand(1,100).' year'));
                 ?>
              </p>
    
   </body>
</html>


