<?php 
	include('includes_MarkUp/HTMLheader.php');
	include('includes_MarkUp/HTMLnavbarAdmin.php'); 
?>
<?php if ($session->isAdmin()):?>
	<body>
	<?php
		if (isset($_GET['loc'])) {
			if ($_GET['loc']) {
				require_once('includes_MarkUp/HTMLlocation.php');
			}
		}
	?>
	</body>
</html>
<?php else: ?>
	<?php require_once('includes_MarkUp/HTMLblocked.php');?>
<?php endif; ?>