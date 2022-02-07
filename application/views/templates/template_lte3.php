<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<?php $this->load->view('templates/lte3/header') ?>
<?php $this->load->view('templates/lte3/scripts') ?>

<body class="hold-transition sidebar-mini">

	<div class="wrapper">

		<?php $this->load->view('templates/lte3/navbar') ?>

		<?php $this->load->view('templates/lte3/sidebar') ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">

			<?php $this->load->view('templates/lte3/slug') ?>

			<!-- Main content -->
			<?= $body ?>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<?php $this->load->view('templates/lte3/controlbar') ?>

		<?php $this->load->view('templates/lte3/footer') ?>

	</div>
	<!-- ./wrapper -->

</body>

</html>
