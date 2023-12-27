<?php
include("conex.php");

$consulta = "SELECT DATE_FORMAT(e.fecha, '%d-%m-%Y') as fecha,
                    DATE_FORMAT(e.hora, '%h:%i') as hora, 
                    e.descripcion,e.idEventos, 
                    a.descripcion as dAccidente,
                    e.latitud, e.longitud, u.nombre, uEstado, foto, l.descripcion as lDescripcion
                    FROM eventos e, usuarios u, accidentes a, localidades l
                    WHERE e.estado = 1
                    and uEstado = 1
                    AND u.idPerfil = 2
                    AND e.idUsuario = u.idUsuario
                    AND e.idAccidente = a.idAccidente
                    and e.idLocalidad = l.idLocalidad
                    ORDER BY fecha desc";

$resultado = mysqli_query($conex, $consulta);

$denuncias = 0;
?>

  
            <?php 
            /*argentina*/
            foreach($resultado as $i){
              $descripcion = ucfirst($i['descripcion']);
              ?>
              
              <div class="col-3">
                
              <div class="card text-bg-light mb-3 shw" style="transition: ease-in-out .2s; max-width: 18rem; max-height: 400px;  border: solid 1px grey; margin-left: 20px; margin-top: 40px;">
              <div class="card-header"><img src="<?php echo  $i['foto']; ?>" alt="" style="width: 20px; height: 20px; border-radius: 100%; color: #333;"><b> <?php echo  $i['nombre']; ?></b></div>
              <div class="card-body">
                <h6 class="card-title"><?php echo  $i['dAccidente']; ?></h6>
                <p class="card-text" style="font-size: 15px; margin-bottom: 30px; "><?php echo $descripcion; ?></p>
                <hr>
                <p class="card-text"><?php echo  $i['fecha']; echo " | ". $i['lDescripcion'];  ?></p>
              </div>
            </div>
            </div>
            
            <?php
            
            $denuncias++;
            if($denuncias == 8){
              break;
            }
        }
        ?>
        <style>
          .shw:hover{
            box-shadow: 0 14px 28px rgba(0,0,0,0.25),
			                  0 10px 10px rgba(0,0,0,0.22);
          }
        </style>
        
