<section>
    <div class = "box-eventos-portada">
        <div class = "row row-eventos-portada">
            <?php foreach($eventos as $evento): ?>
            <div class = "col-md-6 box-evento-portada">
                <a href = "">
                    <div class = "evento-portada">
                        <div class = "fecha-evento-portada">
                            <div class = "fecha-box">
                                <div class = "dia">
                                    <?= $evento->dia ?>
                                </div>
                                <div class = "mes">
                                    <?= $evento->mes ?>
                                </div>
                            </div>
                        </div>
                        <div class = "content-evento-portada">
                            <div class = "title"><?= $evento->nombre ?></div>
                            <div class = "avance">
                                <?= $evento->descripcion ?>
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