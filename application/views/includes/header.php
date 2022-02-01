<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />

  <title>Crud Alunos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- PAGING JS -->
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/jquery-paginate/jquery.paginate.css">

  <!-- dropify -->
  <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
  
  <!-- lightbox -->
  <link rel="stylesheet" href="<?=base_url()?>public/plugins/lightbox/css/lightbox.css" />
  
  <!-- CSS -->
  <link href="<?= base_url() ?>public/css/style.css?v12" rel="stylesheet" />
  

</head>

<body>
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">CRUD ALUNOS</h1>
      <p>Projeto de CRUD simples utilizando o framework codeigniter. Backend em html5, Bootstrap 4, font-awesome6, CSS. Backend desenvolvido em php, mysql, js com jquery. O projeto desenvolvido aqui está disponível no Github, </p>
    </div>
  </div>
  <div class="container">

  <?php
      if ($this->session->flashdata('success')) { ?>
        <p class="alert alert-success">
          <?= $this->session->flashdata('success') ?>
        </p>
      <?php
      } else if ($this->session->flashdata('danger')) { ?>
        <p class="alert alert-danger">
          <?= $this->session->flashdata('danger') ?>
        </p>
      <?php
      }
      ?>
    <div class="row flex-lg-nowrap">


