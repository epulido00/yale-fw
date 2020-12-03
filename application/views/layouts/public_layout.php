<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $template['title'] ?></title>

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- CKEditor -->
    <script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>

    <!-- Estilos -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/estilos.css?<?=rand(0,999)?>">

    <?php if($this->uri->segment(1)): ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php else: ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/slider/sss.min.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/js/slider/sss.css" type="text/css" media="all">
    <?php endif; ?>
</head>
</head>
<body>
    <?= $template['partials']['header'] ?>
    <?= $template['body'] ?>
</body>
</html>