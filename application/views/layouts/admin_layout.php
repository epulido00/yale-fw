<!DOCTYPE html>
<html>
<head>
	<title><?= $template['title'] ?></title>
	<!-- CKEditor -->
    <script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
</head>
<body>
	<ul>
		<li><a href="<?= base_url()  ?>admin/noticias">Noticias</a></li>
		<li><a href="<?= base_url()  ?>admin/eventos">Eventos</a></li>
	</ul>
	<?= $template['body'] ?>

</body>
</html>