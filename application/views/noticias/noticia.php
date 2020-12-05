<section>
    <div class = "box-noticia-view">
        <div class = "noticia-titulo"><?= $noticia->titulo ?></div>
        <div class = "noticia-img" style = "background: url(<?=base_url()?>assets/img/noticias/<?=$noticia->imagen?>) no-repeat center center"></div>
        <hr/>
        <div class = "noticia-content">
            <?= $noticia->descripcion ?>
        </div>
        <div class = "noticia-fecha">
            <small>Publicado: <?=date_format(date_create($noticia->fecha_creacion), 'j \d\e F \d\e\l Y \a \l\a\s h:i a')?></small>
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