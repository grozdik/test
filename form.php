<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FreeTITANIUM</title>
</head>
<body>

    <form action="" method="POST">
        <p>Usuario: <input type="text" name="user">
            clave: <input type="password" name="pass">
         <input type="submit" name="enviar" value="enviar"></p>


    </form>

        <?php 


function enviar(){
    if(isset($_POST['enviar'])){
        
       
       validarc();


       


    }else{
        
    }
}


    function mysqlconec(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db   = "deltawars";

        $conex = mysql_connect($host,$user,$pass);
            if ($conex == true) {
                mysql_select_db('deltawars');
            }else{
                echo "no a conectado";
            };

    }
    function validarc(){
      if (!empty($_POST['user'] & $_POST['pass'])) {
        $user = $_POST['user'];
       $pass = $_POST['pass'];

       $insertar = "insert into user (ID, User, Pass,Email) VALUES ('','$user','$pass','constarnte')";
       $query = mysql_query($insertar);
    
          
      }else{
        echo "Unos de los Campos estan Vacios";
      };
    }


         mysqlconec();
         enviar();

  

     ?>
    
</body>
</html>






