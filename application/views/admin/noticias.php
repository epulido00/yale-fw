<form method = "POST">
    <input name = "titulo" type = "text" placeholder = "Titulo" /><br>
    <input name = "imagen" type = "text" placeholder = "Imagen principal" /><br>
    <textarea name = "descripcion" id = "descripcion"></textarea>
    <input type = "submit">
</form>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>