<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración Administrador</title>
    <link rel="stylesheet" href="CSS/mis-denuncias.css">
    <link rel="stylesheet" href="CSS/search.css">
    <script src="https://kit.fontawesome.com/eb576a252a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php 
    session_start();
    include("buscador.php");
    
    if ($_SESSION['perfil'] == 1) {
        
    }else{
        header("location: index.php");
    }
    
    ?>


    <div class="row">
        
        <div class="col-3" id="left-col"> 
            <a href="indexAdmin.php" class="nav-items"><i class="fa-solid fa-house"></i> Inicio</a>
            <a href="usuarios.php" class="nav-items"><i class="fa-solid fa-user"></i> Usuarios</a>
            <a href="dncAdministrador.php" class="nav-items"><i class="fa-solid fa-truck-medical"></i> Denuncias</a>
            <a href="logout.php" class="nav-items"><i class="fa-solid fa-right-to-bracket"></i> Cerrar sesion</a> 
        </div>
        <div class="col-9" id="right-col">
            <!-- <div class="content-right-col">

            </div> -->
            <div class="main-right-col">   
                <h3>Denuncias de los usuarios</h3>
                <div class="container">
                    <input type="text" name="text" class="input input light-table-filter" placeholder="Buscar denuncia" data-table="table_id">
                    <div class="btn">
                        <i class="icono fa fa-search"></i>
                    </div>
                </div>

                
                <?php include("mostrar-adm.php"); ?>
            </div>
            
        </div>
    </div>





    <footer>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="./IMAGENES/Logo proyecto.png" alt="">
                </div>
                <div class="col-3">
                    <h2>Alumno 1</h2><br>
                    <i class="fa-regular fa-user"></i>
                    Duette Gonzalo<br>
                    <i class="fa-regular fa-envelope"></i>
                    43851204@itbeltran.com.ar <br>   
                    <i class="fa-solid fa-location-dot"></i>
                    Instituto tecnológico beltran
                </div>
                <div class="col-3">
                    <h2>Alumno 2</h2><br>
                    <i class="fa-regular fa-user"></i>
                    Bossio Maximiliano<br>
                    <i class="fa-regular fa-envelope"></i>
                    24481923@itbeltran.com.ar <br>   
                    <i class="fa-solid fa-location-dot"></i>
                    Instituto tecnológico beltran
                </div>
                <div class="col-3">
                    <h2>Alumno 3</h2><br>
                    <i class="fa-regular fa-user"></i>
                    Patitucci Sebastián<br>
                    <i class="fa-regular fa-envelope"></i>
                    44209384@itbeltran.com.ar <br>   
                    <i class="fa-solid fa-location-dot"></i>
                    Instituto tecnológico beltran
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>