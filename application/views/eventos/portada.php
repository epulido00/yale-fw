<section>
    <?php if(!$this->student): ?>
        <div class="alert alert-warning">No eres estudiante, no puedes inscribirte a eventos</div>
    <?php endif; ?>
    <div class = "box-eventos-portada">
        <div class = "row row-eventos-portada">
            <?php foreach($eventos as $evento): ?>
            <?php 
                $inscrito = FALSE;
                if($this->student) {
                    if(in_array($this->student->matricula, $evento->participantes)) {
                        $inscrito = TRUE;
                    }   
                }
                
            ?>
            <div class = "col-md-6 box-evento-portada">
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
                        <div class = "fecha">
                            <small><?= $evento->hora ?></small>
                            <?php if($inscrito): ?>
                                <div class = "etiqueta"><small>Inscrito</small></div>
                            <?php endif; ?>
                        </div>
                        <hr style = "margin: 0;"/>
                        <div class = "title">
                            <?= $evento->nombre ?>
                        </div>
                        <div class = "avance">
                            <?= $evento->descripcion ?>
                        </div>
                        <?php if($this->student): ?>
                            <?php if(!$inscrito): ?>
                            <a href = "<?=base_url()?>eventos/inscribirseEvento/<?=$this->student->matricula?>/<?=$evento->id_evento?>"><button class = "btn-evento">Inscribirse</button></a>
                            <?php else: ?>
                            <a href = "<?=base_url()?>eventos/desinscribirseEvento/<?=$this->student->matricula?>/<?=$evento->id_evento?>"><button class = "btn-evento">Desinscribirse</button></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
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