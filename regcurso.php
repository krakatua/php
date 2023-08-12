<?php
include_once("./header.php");
?> 

  
<section class="container-fluid p-0 mb-5">
        <section id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <section class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </section>
            <section class="carousel-inner">
                <section class="carousel-item active">
                    <img class="w-100" src="./img/1.jpg" alt="Image">
                    <section class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <section class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Estas Ready para crear?</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Fotografia y Video profesional</h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtener precios y beca</a>
                            <a href="./contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contacto</a>
                        </section>
                    </section>
                </section>
                <section class="carousel-item">
                    <img class="w-100" src="./img/2.jpg" alt="Image">
                    <section class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <section class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Soporte tecnico</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Bodas & Eventos Corporativos.</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtener cotizacion</a>
                            <a href="./contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contacto</a>
                        </section>
                    </section>
                </section>
                <section class="carousel-item">
                    <img class="w-100" src="./img/3.jpg" alt="Image">
                    <section class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <section class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Espacios fotograficos</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Estudios de fotografia & video</h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtener cotizacion</a>
                            <a href="./contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contacto</a>
                        </section>
                    </section>
                </section>
            </section>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>
    </section>
  

    <?php
    include_once("./header.php");
?>

<?php
    if($_POST){
        //RECIBIREMOS LOS DATOS EN VARIABLES PHP
        $Nombre= $_POST['Nombre'];
        $Correo= $_POST['Correo'];
        $Tipo= $_POST['Tipo'];
        $Ubicacion= $_POST['Ubicacion'];
        $Comentario= $_POST['Comentario'];
     

        //VALIDAR LOS DATOS
        if(empty($Nombre)){ echo"<h5>Escriba el Nombre</h5>"; }
        if(empty($Correo)){ echo"<h5>Escriba el correo</h5>"; }
        if(empty($Tipo)){ echo"<h5>Escriba el Tipo de sesion</h5>"; }
        if(empty($Ubicacion)){ echo"<h5>Escriba el lugar</h5>"; }
        if(empty($Comentario)){ echo"<h5>Agrega un comentario</h5>"; }
       

        include_once("./credentials.php");

        $Con = mysqli_connect($Servidor , $Usuario,  $Clave,  $DB) or die("Error con la Base de Datos") ;
        $Registrar="
            INSERT INTO curso (Nombre, Correo, Tipo, Ubicacion, Comentario)
            VALUES ('$Nombre', '$Correo', '$Tipo', '$Ubicacion', '$Comentario' )
        ";
        if(mysqli_query($Con,$Registrar)){
            echo"<h5> Registro exitoso</a> </h5> <a href='./index.php'>Registrar otra reserva</a>";
        }else{
            echo"<h5>Ha fallado el resgistro</h5>";
        }
    }

?>
                    </section>
    </section>
<?php
    include_once("./footer.php");
?>