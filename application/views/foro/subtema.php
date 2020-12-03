<section>
    <div class = "foro-box">
        <div style = "width: 100%;">
        <?php if(!$this->student): ?>
            <div class="alert alert-warning">No eres estudiante, no puedes responder</div>
        <?php else: ?>
            <div class = "options" style = "float: right;">
                <div class = "btn btn-primary" data-target = "#comentarioForm">Responder</div>
            </div>
        <?php endif; ?>
        <h3><?=$subtema->titulo?></h3>
        <br>
        <div class = "row box-subtema">
            <div class = "col-md-2 box-autor" style = "padding: 5px;">
                <center>
                    <?=explode(' ', $subtema->nombre)[0] . ' ' . $subtema->apellidop?>
                    <hr style = "margin: 0;"/>
                    <b><?= $subtema->carrera ?></b>
                </center>
            </div>
            <div class = "col-md-10 box-descripcion">
            <small class = "fecha-subtema">Publicado: <?=date_format(date_create($subtema->fecha_creacion), 'j \d\e F \d\e\l Y \a \l\a\s h:i a')?></small>
                <hr style = "margin: 0;"/>
                <div class = "descripcion-subtema"><?=$subtema->descripcion?></div>
            </div>
        </div>
        <br>
        <?php foreach($subtema->comentarios as $comentario): ?>
            <div class = "row box-subtema">
                <div class = "col-md-2 box-autor" style = "padding: 5px;">
                    <center>
                        <?=explode(' ', $comentario->nombre)[0] . ' ' . $comentario->apellidop?>
                        <hr style = "margin: 0;"/>
                        <b><?= $comentario->carrera ?></b>
                    </center>
                </div>
                <div class = "col-md-10 box-descripcion">
                    <small class = "fecha-subtema">Publicado: <?=date_format(date_create($comentario->fecha_creacion), 'j \d\e F \d\e\l Y \a \l\a\s h:i a')?></small>
                    <hr style = "margin: 0;"/>
                    <div class = "descripcion-subtema"><?=$comentario->descripcion?></div>
                </div>
            </div>
            <br>
        <?php endforeach; ?>
        <?php if($this->student): ?>
        <form id = "comentarioForm" action = "<?=base_url()?>foro/addComentario/<?=$subtema->id_subtema?>/<?=$this->student->matricula?>" method = "POST">
            <div class="form-group" style = "text-align: left;">
                <textarea type="text" name = "comentario" class = "form-control inputInscripcion textArea" id = "comentario" placeholder = "Escribe tu respuesta..."></textarea>
            </div>
            <div class = "btnInscripcion">
                <button class = "btn btn-primary" type = "submit">Responder</button>
            </div>
        </form>
        <?php endif; ?>
    </div>
</section>
<script>
    CKEDITOR.replace( 'comentario' );
</script>