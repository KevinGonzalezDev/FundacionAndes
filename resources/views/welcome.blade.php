@extends('layout.general')

@section('content')
<div class="heroimage-mask">
        <img src="img/templates/banner.png" alt="Hero home image" id="hero-image">
    </div>

    <div class="info-header-container">
        <p>La Fundación Niños de los Andes ha ayudado a más de 75.000 niños durante más
            de 30 años, dándoles educación, nutrición y ayuda psicológica para que
            transformen sus vidas y tengan un futuro mejor. Nuestro propósito con este evento
            virtual es recaudar para continuar ayudando a niños en situación de riesgo en todo
            el país.</p>
    </div>

    <div class="timer-container">
        <div class="timerimg-mask">
            <img src="img/timer.png" alt="timer image">
        </div>

        <div class="timer-count-container">
            <h2>FALTAN:</h2>
            <p id="timing"></p>
        </div>
    </div>

    <!-- CONTENIDO DE TICKETS ------------------------------------------------------------------------------ -->

    <div class="tickets-container">
        <div class="header-tickets">
            <img src="img/templates/header-tickets.png" alt="tickets header">
            <div class="header-tickets-info-container">
                <h2>En este evento, mano a mano transformaremos juntos la vida del futuro.</h2>
                <p>75.000 niños volvieron a sonreír ¡Hagamos que esta cifra aumente!</p>
            </div>
        </div>
    </div>



    <div class="titleWithBackground-container">
        <div class="info-titleWithBackground-container">
        <h2>¡Adquiere tu ticket aquí!</h2>
        </div>
</div>
        <div class="contain-titleWithBackground-container">


        <div class="block-ticket">
                <img src="img/tickets/01.png" alt="">
                <h2 id="price">150.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>1 Ingreso</li>
                    <li>+ 1 box</li>
                    <li class="small-text">(Envío de 1 box a tu casa)</li>
                </ul>
            </div>

            <div class="block-ticket">
                <img src="img/tickets/02.png" alt="">
                <h3 id="price">230.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>1 Ingreso</li>
                    <li>+ 2 Box</li>
                    <li class="small-text">(Envío de 2 box a tu casa para niños de 2 edades diferentes)</li>
                </ul>
            </div>

            <div class="block-ticket">
                <img src="img/tickets/03.png" alt="">
                <h2 id="price">280.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>2 Ingresos</li>
                    <li>+ 2 Box</li>
                    <li class="small-text">(Envío de box a dos direcciones)</li>
                </ul>
            </div>

        </div>


        <div class="absolute-button">

            <div id="mascara" href="">Compra Aquí</div>

            <div class="api-container">
                <!--<div id="afrus-container-form" data-form="Zm9ybS0xMTkzLW9yZ2FuaXphdGlvbi04MA=="></div>
                <script src="https://my.afrus.app/template/index.js"></script>-->
            </div>


        </div>


        <!-- CONTENIDO DE EVENTOS ------------------------------------------------------------------------------ -->


   <div class="eventos-container">
       <h2>Nuestro Evento</h2>

           <div class="blocks-evento-container">
               <div class="block-eventos">
                   <div class="eventosimg-mask">
                       <div class="eventosimg-filter-container">
                           <p>EN VIVO</p>
                           <span></span>
                       </div>
                       <img src="img/eventos/1.png" alt="Gerente MacDonalds">
                   </div>

                   <div class="eventos-info-container">
                       <p>Egresada de derecho, modelo, presentadora de la TV colombiana, empresaria de
                        su línea de gafas y la amorosa madre de Helena y Nicolás, querida por los
                        colombianos por su carisma y actitud.</p>
                   </div>
               </div>

               <div class="block-eventos">
                   <div class="eventosimg-mask">
                       <div class="eventosimg-filter-container">
                           <p>EN SEGUIDA</p>
                           <span></span>
                       </div>
                       <img src="img/eventos/2.png" alt="Gerente MacDonalds">
                   </div>
                   <div class="eventos-info-container">
                       <p>Locutor, periodista cultural, traductor, discjockey, editor y productor. Nombrado
                        como uno de los analistas más importantes de la radio colombiana, nos
                        sorprenderá con su estilo y conocimiento en uno de los espacios del evento.</p>
                   </div>
               </div>

               <div class="block-eventos">
                   <div class="eventosimg-mask">
                       <div class="eventosimg-filter-container">
                           <p>DESPUÉS</p>
                           <span></span>
                       </div>
                       <img src="img/eventos/3.PNG" alt="Gerente MacDonalds">
                   </div>
                   <div class="eventos-info-container">
                       <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.</p>
                   </div>
               </div>
           </div>
   </div>

   <!-- CONTENIDO DE EVENTOS !END!------------------------------------------------------------------------------ -->


   <!-- CONTENIDO PATROCINADOR, O APOYO ------->

    <div class="patrocinador-container">
        <h2>Con el apoyo de:</h2>
        <img src="img/icons/crepes.png" alt="Crepes and Waffles logo">
    </div>

    <!-- CONTENIDO PATROCINADOR, O APOYO END!! ------->
        
        <div class="wraps-main-container">

            <div class="wrap">

                <div class="img-mask-wrap">
                    <img src="img/livestream/1.png" alt="wrap image">
                </div>

                <div class="info-wrap fondo1">        
                    <h2>Artistic Funny (0-6 años)</h2>
                    <p>Serán salas especialmente pensadas para los más pequeños del evento. En ellas,
                        tendremos profesionales que acompañarán con dinámicas de manualidades la
                        experiencia de ellos en el Bazar.</p>
                    <a href="#">Entrar</a>
                </div>

            </div>


            <div class="wrap flip">

                <div class="img-mask-wrap">
                    <img src="img/livestream/2.png" alt="wrap image">
                </div>

                <div class="info-wrap fondo2">        
                    <h2>Receta Bon Appétit</h2>
                    <p>Ideal para tus hijos de 7 a 12 años, crearemos recetas explorando la creatividad y
                        concentración de nuestros chefsitos, conducidos por la Chef Beatriz de Crepes &amp;
                        Waffles</p>
                    <a href="#">Entrar</a>
                </div>

            </div>


            <div class="wrap">

                <div class="img-mask-wrap">
                    <img src="img/livestream/3.png" alt="wrap image">
                </div>

                <div class="info-wrap fondo3">        
                    <h2>Power Melody</h2>
                    <p>¿Tu hijo es un gran rockstar de 13 a 17 años? Sala pensada para ese ADN pre-
                        adolescente y adolescente, en la que desarrollarán su oído a través de actividades
                        musicales e instrumentos.</p>
                    <a href="#">Entrar</a>
                </div>
                
            </div>

        </div>




        <div class="welcome-container">
            <h2>¡Fundación Niños de los Andes te espera este 5 de diciembre en el Bazar
                Transformando vidas!</h2>

            <img src="img/icons/logo.png" alt="fundacion">
    
            <div class="fotos-fundacion-container">
              <div class="mascara-imagen">
                <img src="img/templates/fundacion1.jpg" alt="fundacion">
              </div>
              <div class="mascara-imagen">
                <img src="img/templates/fundacion2.jpg" alt="fundacion">
              </div>
              <div class="mascara-imagen">
                <img src="img/templates/fundacion3.jpg" alt="fundacion">
              </div>
            </div>
    
    
        </div>


    </div>




@endsection
