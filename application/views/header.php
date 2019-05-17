<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
  	<link rel="stylesheet" href="<?php echo base_url("ast/css/bootstrap.min.css"); ?>">
    <script src="<?php echo base_url("ast/js/bootstrap.min.js");?>"></script>
  </head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo site_url('#'); ?>">Sistem Penunjang Keputusan</a>
        </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kriteria<span class="caret"></span></a>
      <ul class="dropdown-menu">
      <li>
        <a href="<?php echo site_url('kriteria'); ?>">Lihat Data Kriteria</a>
      </li>
      <li>
        <a href="<?php echo site_url('kriteria/input'); ?>">Input Data Kriteria</a>
      </li>
      </ul>
      </li>
      <li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Himpunan Kriteria<span class="caret"></span></a>
      <ul class="dropdown-menu">
      <li>
        <a href="<?php echo site_url('crips'); ?>">Lihat Himpunan Kriteria</a>
      </li>
      <li>
        <a href="<?php echo site_url('crips/input'); ?>">Input Himpunan Kriteria</a>
      </li>
    </ul>
  </div>
</nav>
<br><br><br><br><br>
  <div class="container">  
    <div class="panel panel-default">
      <div class="page-header">
        <h1 align="center"><?php echo $title; ?></h1>
      </div>