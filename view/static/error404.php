<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<?php require_once 'view/layout/header.php'; ?>



<div class="container-fluid">
    <div class="row">
		<div class="col-5 mx-auto p-5">
			<img src='http://localhost:8888/write_and_read/assets/img/pages/error404.jpg' alt='La pàgina que busques no existeix'>
		</div>
	</div>
</div>

<?php require_once 'view/layout/footer.php';?>