<?php
$page = 'blogpost';
include 'includes/header.php'; ?>
<?php
include 'includes/navbar.php'; ?>


<?php

$id = $_GET['id'];
$sql = "SELECT * FROM blog WHERE id=$id";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);

$title = $row['title'];
$date = $row['date'];
$image = $row['image'];
$content = $row['content'];





?>


<section class="  blogspost-page">
  <div class="blog-image">
    <img src="<?php echo SITEURL; ?>admin/blog/img/<?php echo $image  ?>" alt="">
    <div class="overlay"></div>
  </div>
  <div class="container">
    <div class="content">
      <h2 class="section-heading">
        <?php echo $title ?>
      </h2>
      <div class="d-flex align-items-center justify-content-between">
        <span></span>
        <p class="section-des"><?php echo $date ?></p>
      </div>
      <div class="main-content">
        <?php echo  $content ?>

      </div>
    </div>
  </div>

</section>




<?php include 'includes/topfooter.php'; ?>


<?php include 'includes/footer.php'; ?>