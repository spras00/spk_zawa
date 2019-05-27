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
      <li>
        <a href="<?php echo site_url('rumah'); ?>">Data Rumah</a>
      </li>
      <li>
        <a href="<?php echo site_url('kriteria'); ?>">Kriteria</a>
      </li>
      <li>
        <a href="<?php echo site_url('crips'); ?>">Nilai Crips Kriteria</a>
      </li>
      <li>
        <a href="<?php echo site_url('cr_rumah'); ?>">Nilai Crips Rumah</a>
      </li>
    </ul>
  </div>
</nav>
<br><br><br><br><br>
  <div class="container">  
    <div class="panel panel-default">
      <div class="page-header">
        <h1 align="center"><?php echo $title; ?></h1>
