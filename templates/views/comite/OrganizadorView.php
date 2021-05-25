<?php require_once INCLUDES.'inc_header.php'; ?>
<section class="register-today " style="padding-top:90px !important;">

</section>
<!-- Courses o ponentes-->
<section class="courses section" style="padding-top: 35px !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2>COMITÉ ORGANIZADOR</h2>
                    <div class="icon"><i class="fa fa-users"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 text-center;">
                <div class="card ">
                    <img class="card-img-top px-5 py-4 rounded mx-auto d-block " src="<?php echo IMAGES.'presentacion02.PNG' ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">Dra. Doris Goicochea Parks</h5>
                        <p class="text-center">Presidenta del Comité Organizador </p>
                        <p class="text-center">Perú-UNJBG 2021 - PERÚ </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12">
                <div class="text-content">
                <p class="text-justify">
                Este año, por decisión de la Comisión Internacional de Académicas Sin Fronteras, se 
                designó al Perú como país sede y a la Universidad Nacional Jorge Basadre Grohmann 
                de Tacna como anfitriona del VIII Encuentro Internacional de Académicas Sin Fronteras 
                2021, con el tema “SOCIEDAD LIQUIDA, DESAFÍOS Y ESTRATEGIAS PARA LOS NUEVOS 
                TIEMPOS”, en los ámbitos: educación, economía, salud, social, político, psicológico,
                medio ambiente, ciencia y tecnología.
                </p><br>
                <p class="text-justify">
                En mi calidad de presidente de la comisión organizadora de Perú, tengo el alto honor de 
                invitar a todas las académicas del mundo y personas interesadas en esta temática, a 
                participar de este encuentro que se llevará a cabo los días 29 y 30 de octubre de 2021.
                </p><br>
                <p class="text-justify">
                El mundo ha cambiado, pasamos de la modernidad sólida o sociedad industrial, que es 
                predecible, solida, estable, con ética y valores. A una sociedad líquida o sociedad super 
                industrial; este nuevo paradigma se caracteriza por la transitoriedad, novedad, 
                diversidad y cambio permanente. Estos planteamientos del progreso de la sociedad ya 
                nos dijeron filósofos y científicos como Bauman, Taller, Sennett, Castells, Drucker.
                </p><br>
                <p class="text-justify">
                Con la pandemia de la COVID-19, el mundo entero se enfrentó bruscamente a una nueva realidad, 
                obligándonos a ingresar abruptamente a un nuevo modelo de organización social, que produjo una 
                sociedad miedosa, en confinamiento, determinando nuevas formas de vida y relaciones humanas, 
                dejando al descubierto que no estábamos preparados para enfrentarlos evidenciándose: fragilidad de 
                las economías mundiales, con modelos económicos que no han respondido con total eficiencia a las 
                expectativas de la nueva realidad; estrategias erróneas del Estado en la gestión para la atención de salud 
                mental y física, presentando un alto porcentaje de pérdidas en vidas humanas; ausencia de valores en 
                todos los estratos sociales como empatía, tolerancia y solidaridad, acentuando las injusticias sociales; 
                violencia en todos sus aspectos y niveles con violación de derechos humanos fundamentales; 
                deficiencias en la logística tecnológica para el proceso educativo virtual; incremento del desempleo por 
                modelos poco solidarios e informalidad; en consecuencia, desencanto social por la clase política, 
                generándose críticas al statu quo.
                </p><br>
                <p class="text-justify">
                Este nuevo paradigma; requiere que tengamos que adquirir nuevas competencias, posturas más 
                solidarias, más humanas, más empáticas con el fin de poder diseñar exitosamente estrategias para 
                enfrentar los desafíos de la sociedad líquida, sobre todo más constructivas en el sentido de unirnos para
                fines trascendentes como la organización de eventos académicos.
                </p><br>
                <p class="text-justify">
                Queridas amigas, debemos interiorizar que nada es permanente, excepto el cambio.
                </p><br>
                <p class="text-justify">
                Las esperamos, porque estoy convencida que juntas cambiaremos nuestra visión de la sociedad y del mundo
                </p>
                
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Course -->
            <?php foreach($data as $comite){ ?>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Course -->
				<div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head">
                        <img src="<?php echo IMAGES.'comite/'.$comite['foto'] ?>" alt="#">
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'paises/'.$comite['fotoPais'] ?>" alt="#">
                                <h4 class="title"><?php echo $comite['nacionalidad'] ?></h4>
                            </div>
                        </div>
                        <h4 class="c-title"><a href="#"><?php echo $comite['nombre'] ?></a></h4>
                        <p><?php echo $comite['comision'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php require_once INCLUDES.'inc_footer.php'; ?>