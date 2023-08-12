
<?php
include_once("./header.php");
?> 


<section class="container-fluid bg-primary p-5 hero-header mb-5">
        <section class="row py-5">
            <section class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Contacto</h1>
                <a href="" class="h4 text-white">Inicio</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Contacto</a>
            </section>
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
        $Asunto= $_POST['Asunto'];
        $Mensaje= $_POST['Mensaje'];
     

        //VALIDAR LOS DATOS
        if(empty($Nombre)){ echo"<h5>Escriba el Nombre</h5>"; }
        if(empty($Correo)){ echo"<h5>Escriba el correo</h5>"; }
        if(empty($Asunto)){ echo"<h5>Escriba el Asunto</h5>"; }
        if(empty($Mensaje)){ echo"<h5>Escriba su mensaje</h5>"; }
       
        include_once("./credentials.php");

        $Con = mysqli_connect($Servidor , $Usuario,  $Clave,  $DB) or die("Error con la Base de Datos") ;
        $Registrar="
            INSERT INTO contacto (nombre, correo, Asunto, mensaje)
            VALUES ('$Nombre', '$Correo', '$Asunto', '$Mensaje')
        ";
        if(mysqli_query($Con,$Registrar)){
            echo"<h5> Registro exitoso</a> </h5> <a href='./contact.php'>Registrar otra reserva</a>";
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