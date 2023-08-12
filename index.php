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
                    <img class="w-100" src="./img/DiseñoGraficoBasico.jpg" alt="Image">
                    <section class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <section class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Descubre Tu Pasión por el Diseño en Nuestra Academia Virtual</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Diseño Grafico Basico</h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtener mas Informacion</a>
                            <a href="./contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contacto</a>
                        </section>
                    </section>
                </section>
                <section class="carousel-item">
                    <img class="w-100" src="./img/MotionGraphics.jpg" alt="Image">
                    <section class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <section class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Descubre el Poder del Motion Graphics</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Motion Graphics</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtener mas Informacion</a>
                            <a href="./contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contacto</a>
                        </section>
                    </section>
                </section>
                <section class="carousel-item">
                    <img class="w-100" src="./img/EDICION DE VIDEO.jpg" alt="Image">
                    <section class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <section class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Domina el Arte de la Edición de Video</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Edicion de Video</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtener mas Informacion</a>
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


   <section class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
        <section class="row g-5">
            <section class="col-lg-8">
              
                <section class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="./img/inicio1.jpg" alt="">
                    <h1 class="mb-4">Descubre Tu Potencial Creativo</h1>
                    <p>Sumérgete en un mundo de posibilidades artísticas en la Academia de Diseño. Nuestros cursos te llevarán en un emocionante viaje a través del diseño gráfico, motion graphics, edición de fotografías y edición de video. Aprende las habilidades fundamentales y avanzadas de cada disciplina, guiado por instructores apasionados y con experiencia.</p>
                    <p>En cada curso, descubrirás la esencia del diseño, desde los principios básicos hasta técnicas avanzadas. Explora la magia de dar vida a tus creaciones a través de animaciones cautivadoras. Domina la edición de fotografías para transformar tus instantáneas en obras maestras visuales. Sumérgete en el arte de contar historias a través del video.</p>
                    <p>Únete a nuestra comunidad de creativos, comparte ideas y colabora en emocionantes proyectos. Despierta tu potencial creativo y dale alas a tu imaginación en la Academia de Diseño.</p>


                </section>

                 <section class="mb-5">
               <img class="img-fluid w-100 rounded mb-5" src="./img/Inicio2.jpg" alt="">
           </section>
               
                <section class="bg-light rounded p-5">
                    <h2 class="mb-4">Inscribete</h2>
                   <form action="./regcurso.php" method="post"> 
                        <section class="row g-3">
                            <section class="col-12 col-sm-6">
                                <input name="Nombre" type="text" class="form-control bg-white border-0" placeholder="Nombre" style="height: 55px;" required="">
                            </section>
                            <section class="col-12 col-sm-6">
                                <input name="Correo" type="email" class="form-control bg-white border-0" placeholder="Email" style="height: 55px;" required="">
                            </section>
                            <section class="col-12">
                                <input name="Tipo" type="text" class="form-control bg-white border-0" placeholder="Tipo de curso" style="height: 55px;" required="">
                            </section>
                            <section class="col-12">
                                <input name="Ubicacion" type="text" class="form-control bg-white border-0" placeholder="Ubicacion" style="height: 55px;" required="">
                            </section>
                            <section class="col-12">
                                <textarea name="Comentario" class="form-control bg-white border-0" rows="5" placeholder="Comentario" required=""></textarea>
                            </section>
                            <section class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" required="">Enviar solicitud</button>
                            </section>
                        </section>
                    </form>
                </section>
              
            </section>

      
            <section class="col-lg-4">
      
                <section class="mb-5">
                    <section class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Buscar">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </section>
                </section>
               
                <section class="mb-5">
                    <h2 class="mb-4">Cursos</h2>
                    <section class="d-flex flex-column justify-content-start">
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Ilustración Digital</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Diseño de Experiencia de Usuario (UX)</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Diseño de Sitios Web</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Animación 2D y 3D</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Diseño de Logotipos y Branding</a>
                    </section>
                </section>
              
                <section class="mb-5">
                    <h2 class="mb-4">Tips fotograficos</h2>
                    <section class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="./img/Inspirate.png" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a  class="h5 d-flex align-items-center bg-light px-3 mb-0">Inspírate: Explora estilos y culturas para enriquecer tu creatividad.
                        </a>
                    </section>
                    <section class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="./img/Minimalist.jpeg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a  class="h5 d-flex align-items-center bg-light px-3 mb-0">Elegancia Simple: Opta por diseños limpios y claros para un impacto poderoso.
                        </a>
                    </section>
                    <section class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="./img/colores.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a  class="h5 d-flex align-items-center bg-light px-3 mb-0">Juega con Colores: Experimenta paletas para transmitir emociones
                    </section>
                    <section class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="./img/compo.webp" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a  class="h5 d-flex align-items-center bg-light px-3 mb-0">Composición Maestra: Equilibra elementos y aprovecha el espacio negativo.
                        </a>
                    </section>
                    <section class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="./img/tipografia.png" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a  class="h5 d-flex align-items-center bg-light px-3 mb-0">Tipografía Asertiva: Escoge letras legibles y con personalidad.
                        </a>
                    </section>
                </section>
              
                <section class="mb-5">
                    <img src="./img/clases-de-diseno.webp" alt="" class="img-fluid rounded">
                </section>
                
                <section class="mb-5">
                    <h2 class="mb-4">Etiquetas</h2>
                    <section class="d-flex flex-wrap m-n1">
                        <a  class="btn btn-light m-1">Diseño</a>
                        <a  class="btn btn-light m-1">Fotografia</a>
                        <a  class="btn btn-light m-1">Ilustracion</a>
                        <a  class="btn btn-light m-1">Videos</a>
                        <a  class="btn btn-light m-1">Edicion</a>
                        <a  class="btn btn-light m-1">Bitmaps</a>
                        <a  class="btn btn-light m-1">Logo</a>
                        <a  class="btn btn-light m-1">Animacion</a>
                        <a  class="btn btn-light m-1">3D</a>
                        <a  class="btn btn-light m-1">Premiere</a>
                        <a  class="btn btn-light m-1">After Efects</a>
                        <a  class="btn btn-light m-1">Creatividad</a>
                    </section>
                </section>
               
                <section>
                    <h2 class="mb-4">Servicios</h2>
                    <section class="bg-light text-center" style="padding: 30px;">
                        <p>Descubre un mundo de creatividad y posibilidades a través de nuestros servicios de diseño. Desde los fundamentos del diseño gráfico hasta la magia del motion graphics y la edición de video, estamos aquí para inspirarte y empoderarte en tu viaje creativo.</p>
                        <a href="./cursos.php" class="btn btn-primary py-2 px-4">Ver Mas</a>
                    </section>
                </section>
               
            </section>
          
        </section>
    </section>
   


<?php
include_once("./footer.php");
?> 