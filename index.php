<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php // nustatome laiko zoną
  timezone_set('Europe/Vilnius');?>
    <head>
    <meta charset="utf-8">
    <title>PHP lydės ir <?php print 'ryt '.date('D',strtotime('+1 day'));?>!</title>
  </head>
  <body>
      /! pamakalavom datą
      <h1><?php print 'Edgaras' ?> - PHP su manim buvo ir <?php print date('H',strtotime('-1 hour')).' valandą!';?></h1>
     
      <p><?php print date('Y', strtotime('+1 year'));?> ne už kalnų!</p>
    
   
  </body>
</html>


