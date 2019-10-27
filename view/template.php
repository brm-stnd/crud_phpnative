<!DOCTYPE html>
<html lang="en" dir="ltr">
		<head>
				<meta charset="utf-8">
				<title>BOOK CRUD</title>

				<link href="assets/css/bootstrap.min.css" rel="stylesheet">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="assets/js/bootstrap.min.js"></script>

		</head>
		<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
			<div class="container">
				<a class="navbar-brand" href="index.php">BOOK CRUD</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</nav>

        <?php
            include "view/".$content.".php";
        ?>

		<div class="modal" id="modal"></div>

		<script>
			function add(){
				$.ajax({
					url: 'index.php?add',
					type: 'POST',
					success: function(content){
						$('#modal').html(content);
					}
				});
			}

			function update($id){
				$.ajax({
					url: 'index.php?edit='+$id,
					type: 'POST',
					success: function(content){
						$('#modal').html(content);
					}
				});
			}
		</script>

		</body>
</html>
