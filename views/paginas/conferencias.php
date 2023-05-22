<main class="agenda">
    <h2 class="agenda__heading">Soportes</h2>
    <p class="agenda__descripcion">Agenda de soportes</p>

    <div class="eventos">
        <h3 class="eventos__heading">&lt;Soportes /></h3>
       

        <p class="eventos__fecha">Lunes</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_l'] as $evento ) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <p class="eventos__fecha">Martes</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_m'] as $evento ) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <p class="eventos__fecha">Miercoles</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_mi'] as $evento ) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


        <p class="eventos__fecha">Jueves</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_j'] as $evento ) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <p class="eventos__fecha">Viernes </p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_v'] as $evento ) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <p class="eventos__fecha">Sabado</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_s'] as $evento ) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>





    </div>

    
        
</main>