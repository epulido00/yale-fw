<section>
    <div class = "foro-box">
        <h3>Foro estudiantil</h3>
        <div class = "row">
            <div class = "col-md-12 header-table">
                Últimos temas
            </div>
            <?php foreach($temas as $tema): ?>
                <div class = "col-md-4 tema">
                    <div class = "titulo">
                        <?= $tema->nombre ?>
                    </div>
                    <div class = "subtemas">
                        <ul>
                            <?php $subtemas = $this->foro_model->getSubtemas($tema->id_tema) ?>
                            <?php if(count($subtemas) > 0): ?>
                                <?php foreach($subtemas as $subtema): ?>
                                <li><a href = "#"><?= $subtema->titulo ?></a></li>
                                <?php endforeach; ?>
                                <?php if(count($subtemas) > 5): ?>
                                <li><a href = "#">Ver todos...</a></li>
                                <?php endif; ?>
                            <?php else: ?>
                                <span>No hay subtemas de momento, agrega uno</span>
                            <?php endif; ?>
                        </ul>
                        <div class = "options">
                            <div class = "btn btn-primary">Agregar un subtema</div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>