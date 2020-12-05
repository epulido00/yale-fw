<section>
    <div class = "slider avisos">
        <div class = "just_text aviso" style = "background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?=base_url()?>assets/img/avisos/escultura.jpg')">
            <div class = "texto-aviso">Este es un nuevo aviso de escultura</div>
        </div>
        <div class = "just_text aviso" style = "background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?=base_url()?>assets/img/avisos/pintura.jpg')">
            <div class = "texto-aviso">Este es un nuevo aviso de pintura</div>
        </div>
    </div>

    <div class = "noticias">
        <h3>Noticias recientes</h3>
        <div class = "row row-noticias">
            <?php foreach($noticias as $noticia): ?>
            <div class = "col-md-3 box-noticia-reciente">
                <a href = "<?=base_url()?>noticias/<?=$noticia->id_noticia?>/<?=$noticia->slug?>">
                    <div class = "noticia-reciente" style = "background-image: url(<?=base_url()?>assets/img/noticias/<?=$noticia->imagen?>)">
                        <div class = "noticia-reciente-content">
                            <?= $noticia->titulo ?>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<script>
    $('.slider').sss({
        slideShow : true, // Set to false to prevent SSS from automatically animating.startOn : 0, // Slide to display first. Uses array notation (0 = first slide).transition : 400, // Length (in milliseconds) of the fade transition.speed : 3500, // Slideshow speed in milliseconds.showNav : true // Set to false to hide navigation arrows.
    });
</script>