<section>
    <div class = "box-noticias-portada">
        <div class = "row row-noticias-portada">
            <?php foreach($noticias as $noticia): ?>
            <div class = "col-md-6 box-noticia-portada">
                <a href = "<?=base_url()?>noticias/<?=$noticia->id_noticia?>/<?=$noticia->slug?>">
                    <div class = "noticia-portada">
                        <div class = "img-noticia-portada" style = "background: url(<?=base_url()?>assets/img/noticias/<?=$noticia->imagen?>) no-repeat center center"></div>
                        <div class = "content-noticia-portada">
                            <div class = "title"><?= $noticia->titulo ?></div>
                            <div class = "avance">
                                <?= $noticia->descripcion ?> 
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class = "box-avisos">
        <?php foreach(getAvisos() as $aviso): ?>
        <div class = "aviso-lateral" style = "background-image: url(<?=base_url()?>assets/img/avisos/<?=$aviso->imagen?>)">
            <div class = "aviso-lateral" style = "background-image: url(<?=base_url()?>assets/img/avisos/<?=$aviso->imagen?>)">
                <div class = "texto-aviso-lateral"><?= $aviso->titulo ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>