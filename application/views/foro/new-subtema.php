<section>
    <div class = "container-fluid inscripcion-box">
        <center>
        <div class = "inscripcion-content">
            <h3>Foro estudiantil - Tema</h3>
            <hr/>
            <p>Escribe un nuevo subtema.</p>
            <div id = "msg"></div>
            <form id = "new-subtema" method = "POST">
                <div class="form-group" style = "text-align: left;">
                    <label for = "titulo">Titulo</label>
                    <input type="text" name = "titulo" class = "form-control inputInscripcion" id = "titulo"/>
                </div>
                <div class="form-group" style = "text-align: left;">
                    <label for = "descripcion">Descripcion</label>
                    <textarea type="text" name = "descripcion" class = "form-control inputInscripcion textArea" id = "descripcion"></textarea>
                </div>
                <br/>
                <div class = "btnInscripcion">
                    <button class = "btn btn-primary" type = "submit">Subir</button>
                </div>

            </form>
        </div>
        </center>
    </div>
</section>
<script>

    CKEDITOR.replace( 'descripcion' );

    $('#new-subtema').on('submit', function(e) {

        e.preventDefault();
        e.stopImmediatePropagation();

        var val = true;
        var descripcion = CKEDITOR.instances.descripcion.getData();
        var titulo = $('#titulo').val();

        if(titulo == '' || descripcion == '') {
            val = false;
        }
        

        if(val) {
            $(this).off("submit");
            this.submit();
        } else {
            window.scrollTo(0, 0);
            $('#msg').html('<div class = "alert alert-danger">Por favor, llene todos los datos</div>');
        }
    });
</script>