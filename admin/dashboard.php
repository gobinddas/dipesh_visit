<?php include 'includes/header.php';
include '../config/constants.php'; ?>
<section class="backend-page ">
  <?php include 'includes/nav.php'; ?>
  <div class="page">
    <h2 class="section-heading">Dashboard</h2>
    <div class="dashboard-row">






      <div class="dashboard-item">

        <?php
        $sql = "SELECT  * FROM user";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        ?>


        <i class="fa-solid fa-users-viewfinder"></i>
        <h2 class="section-heading"><?php echo $count ?></h2>
        <h3 class="section-title">User</h3>
      </div>
      <div class="dashboard-item">
        <?php
        $sql = "SELECT  * FROM blog ";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        ?>
        <i class="fa-solid fa-blog"></i>
        <h2 class="section-heading">
          <?php echo $count ?>
        </h2>
        <h3 class="section-title">Blogs</h3>
      </div>
      <div class="dashboard-item">
        <?php
        $sql = "SELECT  * FROM inquires ";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        ?>
        <i class="fa-solid fa-comment-dots"></i>
        <h2 class="section-heading"><?php echo $count ?></h2>
        <h3 class="section-title">Inquiries</h3>
      </div>
      <div class="dashboard-item">


        <?php
        $sql = "SELECT  * FROM packages ";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        ?>
        <i class="fa-brands fa-buffer"></i>
        <h2 class="section-heading"><?php echo $count ?></h2>
        <h3 class="section-title">Packages</h3>
      </div>
      <div class="dashboard-item">
        <?php
        $sql = "SELECT  * FROM country ";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        ?>
        <i class="fa-solid fa-earth-americas"></i>
        <h2 class="section-heading"><?php echo $count ?> </h2>
        <h3 class="section-title">Countries</h3>
      </div>
    </div>
  </div>

</section>

<?php include 'includes/footer.php'; ?>