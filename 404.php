<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php');?>

<body id="page-top">

  <!-- Navbar Search -->
  <!-- Navbar -->
  <?php include('templates/navbar.php');?>   
  <!-- Sidebar -->
  <?php include('templates/sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="mainpage.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">404 Error</li>
        </ol>

        <!-- Page Content -->
        <h1 class="display-1">404</h1>
        <p class="lead">Page not found. You can
          <a href="javascript:history.back()">go back</a>
          to the previous page, or
          <a href="mainpage.php">return home</a>.</p>

    </div><!-- /.container-fluid -->
  </div><!-- /.content-wrapper -->
  <!--Footer-->    
  <?php include('templates/footer.php');?>
  </div><!-- /#wrapper -->
  <!--scrolltop-->
  <?php include('templates/scrolltop.php')?>
  
  <!--scripts-->
  <?php include('templates/scripts.php')?>

</body>

</html>
