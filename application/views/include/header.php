<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>College management system</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-3.1.0.js'); ?>"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="container-fluid ">
		<div class="navbar-header col-lg-10">
			<a class="navbar-brand" href="#">College management system</a>
		</div>
		<div class="col-lg-2" id="bs-example-navbar-collapse-2">
		<ul class="nav nav-pills">
			<li class="nav-item dropdown show">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Settings</a>
				<div class="dropdown-menu show" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
				<a class="dropdown-item" href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?php echo site_url('welcome/logout') ?>">Logout</a>
				</div>
			</li>
		</ul>
		</div>
	</div>
</nav>