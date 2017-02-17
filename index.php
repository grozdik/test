<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cpanel</title>
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

    <header>
       <nav class="navbar navbar-default">
            <div class="container-fluid">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-main-menu-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle Navegation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Cpanel</a>
             </div>

        <div class="collapse navbar-collapse" id="bs-main-manu-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#">Ranking</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Editor <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Wcoint</a></li>
                        <li><a href="#">Gcoint</a></li>
                        <li><a href="#">Golbin</a></li>
                    </ul>

                </li>
            </ul>

        </div>   
           </div>
       </nav>
    </header>

    <div class="container">
        
           
                      <div class="jumbotron">
                 
                        <h1>Editor de Puntos</h1>
                        <p>Editor de Puntos para CashShop</p>
                    </div>
                
                 
       <div class="row">
            <div class="col-md-12">
           
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="usuarios">Usuario</label>
                                    <input type="text" class="form-control" placeholder="usuario" name="user">
                                </div>
                                <div class="form-group">
                                    <label for="cantidad">Cantidad</label>
                                    <input type="text" class="form-control" placeholder="Cantidad" name="puntos">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default" type="submit" name="enviar">Editar Wcoint</button>
                                </div>
                            </form>
            </div>
                   
       </div>

                   
          
        </div>



        
   



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script> 
</body>
</html>