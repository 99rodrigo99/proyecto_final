<section id="contact" class="contact">
    <div class="container mt-5">

        <div class="section-title" data-aos="fade-up">
            <h2>Contactenos</h2>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-about">
                    <h3>Servigas del Huila</h3>
                    <p>Si tienes preguntas sobre nuestros servicios no dudes en contactarnos, nos comunicaremos lo más pronto contigo para resolver todas tus inquietudes.</p>
                    <div class="social-links">
                        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="info">
                    <div>
                        <i class="ri-map-pin-line"></i>
                        <p>calle 25a sur #23a-36<br>Canaima, Neiva-Huila</p>
                    </div>

                    <div>
                        <i class="ri-mail-send-line"></i>
                        <p>contacto@servigasdelhuila.com</p>
                    </div>

                    <div>
                        <i class="ri-phone-line"></i>
                        <p>+57 321 342 1252</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor ingrese su nombre" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor ingrese un email valido" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Tema" data-rule="minlen:4" data-msg="Por favor ingrese un tema" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor ingrese un" placeholder="Mensaje"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Cargando</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Tu mensaje ha sido enviado con exito. Pronto nos comunicaremos contigo!</div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar mensaje</button></div>
                </form>
            </div>

        </div>

    </div>
</section>