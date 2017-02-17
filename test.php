<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FreeTITANIUM</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">



</head>
<body>

  <header>
    <nav class="navbar navbar-default">
      
    </nav>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <form action="" method="POST" class="form-inline">

         <table class="table table-bordered">
    <tr>
      <td>
        Set 1

        <br />

          <input type="submit" class="btn btn-warning" value="150 Creditos" name="set1" >
 

      </td>
      <td>
        Set 2
           <br />

          <input type="submit" class="btn btn-warning" value="200 Creditos" name="set2">
         </td>
      <td>
        Set 3
           <br />

          <input type="submit" class="btn btn-warning" value="300 Creditos" name="set3">
      </td>
    </tr>
    <tr>
      <td>
        Set 4
           <br />

          <input type="submit" class="btn btn-warning" value="Comprar" name="set4">
      </td>
      <td>
        Set 5
           <br />

          <input type="submit" class="btn btn-warning" value="Comprar" name="set5">
      </td>
      <td>
        Set 6
           <br />

          <input type="submit" class="btn btn-warning" value="Comprar" name="set6">
      </td>
    </tr>

  </table>

  </form>
        
      </div>
    </div>
  </div>

  <?php 




  if (isset($_POST['set1'])) {
      if ($GLOBALS['credito'] == $GLOBALS['set1'] ) {

        echo " <br /> Gracis por Comprar el item";
        $restar = $GLOBALS['credito'] - $GLOBALS['set1'] ;
        $GLOBALS['credito'] = $restar;

       
      }else {
        echo "credito insuficiente";

      };
  }elseif (isset($_POST['set2'])) {

           if ($credito == $set2 ) {

        echo " <br /> Gracis por Comprar el item";
        $restar = $credito - $set1;
        $credito = $restar;

       
      }else {
        echo "credito insuficiente";

      };

  }elseif (isset($_POST['set3'])) {
     if ($credito == $set2 ) {

        echo " <br /> Gracis por Comprar el item";
        $restar = $credito - $set1;
        $credito = $restar;

       
      }else {
        echo "credito insuficiente";

      };
  }else{
    echo "<br />";
    echo "selecciona un set del 1 al 3, me dios flojera poner los 6";
  };
$credito = 150;
$set1 = 150;
$set2 = 200;
$set3 = 300;

echo "<br /> Creditos Disponibles ".$credito."\n";



   ?>
 
  
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script> 
    
</body>
</html>






