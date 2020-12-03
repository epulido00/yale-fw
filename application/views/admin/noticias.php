<form method = "POST">
    <input name = "titulo" type = "text" placeholder = "Titulo" />
    <input name = "imagen" type = "text" placeholder = "Imagen principal" />
    <textarea name = "descripcion" id = "descripcion"></textarea>
    <input type = "submit">
</form>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>