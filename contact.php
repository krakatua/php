<?php
include_once("./header.php");
?> 


<section class="container-fluid bg-primary p-5 hero-header mb-5">
        <section class="row py-5">
            <section class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Contacto</h1>
                <a href="" class="h4 text-white">inicio</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Contacto</a>
            </section>
        </section>
    </section>


<section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <section class="container">
            <section class="text-center mx-auto mb-5" style="max-width: 600px;">
            	 <h1 class="display-5 mb-0">Contacto</h1>
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Completa el formulario para mas informacion</h5>
               
            </section>
            <section class="row g-5">
                <section class="col-lg-7 wow slideInUp" data-wow-delay="0.3s">
                    <section class="bg-light rounded p-5">
                            <form action="./regcontact.php" method="post"> 
                            <section class="row g-3">
                                <section class="col-6">
                                    <input name="Nombre" type="text" class="form-control border-0 px-4" id="name" placeholder="Nombre" style="height: 55px;" required="">
                                </section>
                                <section class="col-6">
                                    <input name="Correo" type="email" class="form-control border-0 px-4" id="email" placeholder="Email" style="height: 55px;" required="">
                                </section>
                                <section class="col-12">
                                    <input name="Asunto" type="text" class="form-control border-0 px-4"  id = "subject" placeholder="Asunto" style="height: 55px;" required="">
                                </section>
                                <section class="col-12">
                                    <textarea name="Mensaje" class="form-control border-0 px-4 py-3" rows="8" id="message" placeholder="Mensaje" required=""></textarea>
                                </section>
                                <section class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" id="form-submit">Enviar</button>
                                </section>
                            </section>
                        </form>
                    </section>
                </section>
                <section class="col-lg-5 wow slideInUp" data-wow-delay="0.6s">
                    <section class="bg-light rounded p-5">
                        <section class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <section class="text-start">
                                <h5 class="mb-1">Nuestra Ubicacion</h5>
                                <span>C/4 esq. Av. Enrique Jimenez Moya, Santo Domingo</span>
                            </section>
                        </section>
                        <section class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <section class="text-start">
                                <h5 class="mb-1">Email</h5>
                                <span>MartAcademy@gmail.com</span>
                            </section>
                        </section>
                        <section class="d-flex align-items-center mb-4">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <section class="text-start">
                                <h5 class="mb-1">Telefono</h5>
                                <span>+1 829 112 0357</span>
                            </section>
                        </section>
                        <section>
                            <iframe class="position-relative w-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                                frameborder="0" style="height: 230px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>


<?php
include_once("./footer.php");
?>