<!DOCTYPE html>
<html lang="en">
	
	<!-- Head -->
	<?php include_once "head.php"; ?>
	
	<!-- Body -->
	<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
		<!-- Header -->
		<?php include_once "header.php"; ?>
		<div class="app-body">
			
			<!-- Sidebar -->
			<?php include_once "sidebar.php"; ?>
			
			<!-- Main content -->
			<main class="main">
				<!-- Breadcrumb -->
				<?php include_once "breadcrumb.php"; ?>
				<!-- Content -->
				<div class="container-fluid">
					<div class="animated fadeIn">

						<?php include_once "members.php"; ?>

						<?php include_once "traffic.php"; ?>

						<?php include_once "social.php"; ?>

						<?php include_once "trafficandsales.php"; ?>
					</div>
				</div>
			</main>
			
			<!-- Aside -->
			<?php include_once "aside.php"; ?>
		</div>
		
		<!-- Footer -->
		<?php include_once "footer.php"; ?>
	</body>
</html>
