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
                    $frutas  = array('manzana','naranja','melon','platano','uvas');
                    
                    array_push($frutas, 'pera');//agregar al array

                    unset($frutas[1]);//elimina el dato en la posicion seleccionada del arreglo 

                    echo "<pre>";
                    print_r($frutas);//imprime el arreglo junto la posicion
                    echo "</pre>";
                ?>
          </div>
    </div>
    
  </body>
</html>