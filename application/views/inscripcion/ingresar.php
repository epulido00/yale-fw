<section>
    <div class = "container-fluid ingresar-box">
        <center>
        <div class = "inscripcion-content">
            <h3>Ingresa a Yale como estudiante</h3>
            <hr/>
            <?php if(@$msg): ?>
                <div class = "alert alert-danger"><?=$msg?></div>
            <?php endif; ?>
            <form id = "inscribirse" method = "POST">
                <input id = "carrera-radio" type = "hidden" name = "carrera" value = "" />
                <div class="form-group" style = "text-align: left;">
                    <label for = "matricula" style = "text-align: left;">Matrícula</label>
                    <input type="text" name = "matricula" class = "form-control inputInscripcion" id = "matricula" value = "<?= @$_POST['matricula'] ?>"/>
                </div>
                <div class="form-group" style = "text-align: left;">
                    <label for = "password" style = "text-align: left;">Contraseña</label>
                    <input type="password" name = "password" class = "form-control inputInscripcion" id = "password"/>
                </div>
                <br/>
                <div class = "btnInscripcion">
                    <button class = "btn btn-primary" type = "submit">Ingresar</button>
                </div>

            </form>
        </div>
        </center>
    </div>
</section>