<?php
$page = 'blog';
include 'includes/header.php'; ?>
<?php
include 'includes/navbar.php'; ?>


<section class=" bc-padding blog-page">

  <div class="container">
    <h2 class="section-heading">Our Blogs</h2>




    <div class=" blog-row">

      <?php
      $sql = "SELECT * FROM blog";
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);
      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $title = $row['title'];
          $image = $row['image'];
          $content = $row['content'];
          $id = $row['id'];



      ?>
          <div class="card-item">


            <a href="blogpost.php?id=<?php echo $id ?>">
              <div class="img"><img src="<?php echo SITEURL; ?>admin/blog/img/<?php echo $image ?>" alt=""></div>
              <div class="content">
                <h3 class="card-title"><?php echo $title ?></h3>
                <span class="para"> <?php echo $content ?></span>
                <a class="read-more" href="blogpost.php?id=<?php echo $id ?>">Read more</a>
              </div>
            </a>
          </div>


      <?php

        }
      }


      ?>









    </div>
  </div>
</section>





<?php include 'includes/topfooter.php'; ?>

<?php include 'includes/footer.php'; ?>