<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
          <h1>Aprendiendo PHP</h1>
          
          <div class="codigo">
            <?php 
                for ($i = 10; $i <= 33; $i++){
                    echo " El numero es " . $i;

                    echo "<br/>";
                }
            
            ?>


          </div>
    </div>
    
  </body>
</html>