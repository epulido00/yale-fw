<section>
    <div class = "container-fluid inscripcion-box">
        <center>
        <div class = "inscripcion-content">
            <h3>Inscribete ahora a la Universidad de Yale</h3>
            <hr/>
            <p>Revisa nuestras carreras disponibles y selecciona una</p>
            <div id = "msg"></div>
            <form id = "inscribirse" method = "POST">
                <center>
                    <div class = "carreras">
                        <?php foreach($carreras as $carrera): ?>
                            <div onclick = "selectRadio(<?=$carrera->id_carrera?>)" id = "carrera<?=$carrera->id_carrera?>" class = "carrera" style = "background-image: url('<?=base_url()?>assets/img/carreras/<?=$carrera->imagen?>');">

                            </div>
                        <?php endforeach; ?>
                    </div>
                </center>
                <br/>
                <input id = "carrera-radio" type = "hidden" name = "carrera" value = "" />
                <div class="form-row">
                    <div class="col" style = "text-align: left;">
                        <label for = "email">Email (Para enviar tus datos de estudiante)</label>
                        <input type="text" name = "email" class = "form-control inputInscripcion" id = "email"/>
                    </div>
                    <div class="col" style = "text-align: left;">
                        <label for = "nombre" style = "text-align: left;">Nombre</label>
                        <input type="text" name = "nombre" class = "form-control inputInscripcion" id = "nombre"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col" style = "text-align: left;">
                        <label for = "apellido_p">Apellido paterno</label>
                        <input type="text" name = "apellido_p" class = "form-control inputInscripcion" id = "apellido_p"/>
                    </div>
                    <div class="col" style = "text-align: left;">
                        <label for = "apellido_m" style = "text-align: left;">Apellido materno</label>
                        <input type="text" name = "apellido_m" class = "form-control inputInscripcion" id = "apellido_m"/>
                    </div>
                </div>
                <br/>
                <div class = "btnInscripcion">
                    <button class = "btn btn-primary" type = "submit">Enviar información</button>
                </div>

            </form>
        </div>
        </center>
    </div>
</section>
<script>
    function selectRadio(id) {
        $('#carrera-radio').val(id);
        $('.carrera').removeClass('selected');
        $('#carrera'+id).addClass('selected');
    }

    $('#inscribirse').on('submit', function(e) {

        e.preventDefault();
        e.stopImmediatePropagation();

        var val = true;
        $('#inscribirse :input').each(function(){
            if( $(this).attr('type') != 'submit' ){
                if($(this).val() == '') {
                    val = false;
                }
            }
        });

        if(val) {
            $(this).off("submit");
            this.submit();
        } else {
            window.scrollTo(0, 0);
            $('#msg').html('<div class = "alert alert-danger">Por favor, llene todos los datos</div>');
        }
    });
</script>