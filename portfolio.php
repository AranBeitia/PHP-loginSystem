<?php
	require "header.php";
	if(!isset($_GET['mailuid'])) {
		header('Location: home.php');
		exit();
	}

	$user=$_GET['mailuid'];
?>
	
<main class="main__wrapper">
	<section class="main__content">
		<h1>Hello portfolio</h1>
		<p>welcome <?php echo $user?></p>
	</section>
</main>

<?php
	require "footer.php";
?>