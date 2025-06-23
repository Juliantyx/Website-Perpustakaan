<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('layouts/head') ?>

  <!-- Extra head e.g title -->
  <?= $this->renderSection('head') ?>
</head>

<?php
  $uri = service('uri');
  $isLoginPage = $uri->getSegment(1) === 'login';
?>
<body class="position-relative"
  <?= $isLoginPage ? "style=\"background: url('" . base_url('assets/images/login.jpg') . "') no-repeat center center fixed; background-size: cover;\"" : "" ?>>

  <!--  Body Wrapper -->
  <div class="background">
  </div>

  <div class="page-wrapper" id="main-wrapper">
    <!--  Main wrapper -->
    <div class="body-wrapper position-relative">
      <?= $this->renderSection('back') ?>
      <div class="container col-xxl-8 px-4 py-5" style="min-height: 100vh;">
        <!-- Main content -->
        <div class="w-100">
          <?= $this->renderSection('content') ?>
        </div>

        <div class="align-self-end w-100">
          <?= $this->include('layouts/footer') ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <?= $this->include('imports/scripts/basic_scripts') ?>

  <!-- Extra scripts -->
  <?= $this->renderSection('scripts') ?>
</body>

</html>
