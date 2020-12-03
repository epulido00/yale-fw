<section>
    <div class = "box-noticias-portada">
        <div class = "row row-noticias-portada">
            <?php foreach($noticias as $noticia): ?>
            <div class = "col-md-6 box-noticia-portada">
                <a href = "">
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

    </div>
</section>