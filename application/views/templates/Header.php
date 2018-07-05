<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>fivestats</title>

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/multi-select.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/site.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.js" ></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.js" ></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.multi-select.js" ></script>
	<script src="<?php echo base_url(); ?>assets/js/site.js" ></script>
</head>
<body>

	<ul class="nav justify-content-center">
		<li class="nav-item">
			<a class="nav-link" href="#" >Mes stats</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= site_url('Players') ?>" >Joueurs</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= site_url('Teams') ?>">Equipes</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Matchs</a>
		</li>
	</ul>
	
	<div class="container" style="margin-top:100px"  >
		<div class="row" >
			<div class="col-lg-12" >
