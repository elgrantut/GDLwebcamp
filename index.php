<?php include_once 'includes/templates/header.php'; ?>
    <section class="seccion contenedor">
        <h2>La mejor conferencia de Diseño Web en Español</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec leo felis, maximus ac interdum sit amet, scelerisque at nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum a ex dolor. Donec ornare
            tristique aliquam. </p>
    </section>
    <!--seccion-->
    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="img/bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv" type="video/ogg">
            </video>
        </div>
        <!--.contenedor-video-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del Evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code"></i> Talleres</a>
                        <a href="#conferencias"><i class="fas fa-comment"></i> Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i></i> Seminarios</a>
                    </nav>
                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y JavaScript</h3>
                            <p><i class="far fa-clock"></i> 16:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Matias J Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="far fa-clock"></i> 20:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Matias J Sanchez</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
                    <!--#Talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser Freelancer</h3>
                            <p><i class="far fa-clock"></i> 10:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Gregorio Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologías del Futuro</h3>
                            <p><i class="far fa-clock"></i> 17:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Susan Sanchez</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
                    <!--#Conferencias-->
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para Móviles</h3>
                            <p><i class="far fa-clock"></i> 17:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 11 de Dic</p>
                            <p><i class="fas fa-user"></i> Harold García</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una Mañana</h3>
                            <p><i class="far fa-clock"></i> 10:00 hrs</p>
                            <p><i class="fas fa-calendar"></i> 11 de Dic</p>
                            <p><i class="fas fa-user"></i> Susana Rivera</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
                    <!--#Seminarios-->
                </div>
                <!--.programa-evento-->
            </div>
            <!--.contenedor-->
        </div>
        <!--.contenido-programa-->
    </section>
    <!--.programa-->
    <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <img src="img/invitado1.jpg" alt="imagen invitado">
                    <p>Rafael Bautista</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado2.jpg" alt="imagen invitado">
                    <p>Shari Herrera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado3.jpg" alt="imagen invitado">
                    <p>Gregorio Sanchez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado4.jpg" alt="imagen invitado">
                    <p>Susana Rivera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado5.jpg" alt="imagen invitado">
                    <p>Harold García</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado6.jpg" alt="imagen invitado">
                    <p>Susan Sanchez</p>
                </div>
            </li>
        </ul>
    </section>
    <div class="contador parallax">
        <div class="contador">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p> Invitados</li>
                <li>
                    <p class="numero"></p> Talleres</li>
                <li>
                    <p class="numero"></p> Días</li>
                <li>
                    <p class="numero"></p> Conferencias</li>
            </ul>
        </div>
    </div>

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por día</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocaditos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Todos los Días</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocaditos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 Días</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocaditos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div id="mapa" class="mapa"></div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="textimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>
                        Fusce tincidunt consequat nunc id vehicula. Integer sed gravida tellus, id iaculis augue. Pellentesque quis dui nec tortor porttitor tempor viverra id elit. Etiam sed arcu a metus lacinia porttitor.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>
                            Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span>
                        </cite>
                    </footer>
                </blockquote>
            </div>
            <!--Testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>
                        Fusce tincidunt consequat nunc id vehicula. Integer sed gravida tellus, id iaculis augue. Pellentesque quis dui nec tortor porttitor tempor viverra id elit. Etiam sed arcu a metus lacinia porttitor.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>
                            Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span>
                        </cite>
                    </footer>
                </blockquote>
            </div>
            <!--Testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>
                        Fusce tincidunt consequat nunc id vehicula. Integer sed gravida tellus, id iaculis augue. Pellentesque quis dui nec tortor porttitor tempor viverra id elit. Etiam sed arcu a metus lacinia porttitor.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>
                            Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span>
                        </cite>
                    </footer>
                </blockquote>
            </div>
            <!--Testimonial-->
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Regístrate al Newsletter:</p>
            <h3>gldwebcamp</h3>
            <a href="#" class="button transparente">Registro</a>
        </div>
        <!--.contenido-->
    </div>
    <!--.newsletter-->
    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>Días</li>
                <li>
                    <p id="horas" class="numero"></p>Horas</li>
                <li>
                    <p id="minutos" class="numero"></p>Minutos</li>
                <li>
                    <p id="segundos" class="numero"></p>Segundos</li>
            </ul>
        </div>
    </section>
    <?php include_once 'includes/templates/footer.php'; ?>
