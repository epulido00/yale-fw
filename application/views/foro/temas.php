<section>
    <div class = "foro-box">
        <div style = "width: 100%;">
        <?php if(!$this->student): ?>
            <div class="alert alert-warning">No eres estudiante, no puedes agregar temas</div>
        <?php else: ?>
            <div class = "options" style = "float: right;">
                <a href = "<?=base_url()?>foro/nuevo-subtema/<?=$tema->id_tema?>"><div class = "btn btn-primary">Agregar un subtema</div></a>
            </div>
        <?php endif; ?>
        <h3><?=$tema->nombre?></h3>
        <div class = "row">
            <div class = "col-md-12 header-table">
                Últimos subtemas
            </div>
        </div>
        <?php foreach($subtemas as $subtema): ?>
            <div class = "row box-preview-sub">
                <div class = "col-md-10">
                    <a href = "<?=base_url()?>foro/subtema/<?=$subtema->id_subtema?>/<?=$subtema->slug?>"><div class = "titulo-preview-sub"><?=$subtema->titulo?></div></a>
                    <small class = "fecha-preview-sub">Publicado: <?=date_format(date_create($subtema->fecha_creacion), 'j \d\e F \d\e\l Y')?></small>
                </div>
                <div class = "col-md-2">
                    <small>Respuestas: 1</small>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>