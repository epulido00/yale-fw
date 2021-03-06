<section>
    <div class = "box-resultados">
        <div class = "row row-resultado">
            <?php if(!$msg): ?>
            <?php if(count($resultados) > 0): ?>
                <h3>Resultados para <?= $_GET['q'] ?></h3>
                <?php foreach($resultados as $resultado): ?>
                <div class = "resultado">
                    <a href = "<?=$resultado->link?>"><div class  = "link-title"><?= $resultado->titulo ?></div></a>
                    <hr style = "margin: 0px 0px;"/>
                    <div class = "descripcion"><?= $resultado->descripcion ?>...</div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <h3>Sin resultados para <?= $_GET['q'] ?> :( </h3>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class = "box-avisos">
        <?php foreach(getAvisos() as $aviso): ?>
        <div class = "aviso-lateral" style = "background-image: url(<?=base_url()?>assets/img/avisos/<?=$aviso->imagen?>)">
            <div class = "texto-aviso-lateral"><?= $aviso->titulo ?></div>
        </div>
        <?php endforeach; ?>
    </div>
</section>