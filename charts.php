<!DOCTYPE html>
<html lang="en">
	
	<!-- Head -->
	<?php include_once "head.php"; ?>

	<!-- Body -->
	<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
		<?php include_once "header.php"; ?>
		<div class="app-body">
			
			<!-- Sidebar -->
			<?php include_once "sidebar.php"; ?>

			<!-- Main content -->
			<main class="main">	
				<!-- Breadcrumb -->
				<?php include_once "breadcrumb.php"; ?>
				<!-- Content -->
				<?php include_once "charts_content.php"; ?>
			</main>
			
			<!-- Aside -->
			<?php include_once "aside.php"; ?>
		</div>
		
		<!-- Footer -->
		<?php include_once "footer.php"; ?>
	</body>
</html>