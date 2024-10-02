<section class="feature-destination section-padding">
  <div class="container">
    <h4 class="section-title">Our featured <span>destinations</span></h4>
    <p class="section-des">Explore top destinations with peak climbing, trekking, and exciting day trips.</p>

    <div class="destination-row owl-carousel owl-theme  ">

      <?php

      $sql = "SELECT * FROM packages WHERE feature = 'yes' LIMIT 6";
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);

      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $title = $row['title'];
          $country = $row['country'];
          $image = $row['image'];
          $id = $row['id'];
      ?>
          <a class="card-item" href="packages_post.php?id=<?php echo  $id ?>">
            <div class="img"><img src="<?php echo SITEURL; ?>admin/packages/img/<?php echo $image ?>" alt=""></div>
            <div class="content">
              <h3 class="card-title"><?php echo $title ?></h3>
              <p class="card-des"><i class="fa-solid fa-location-dot"></i><?php echo $country ?></p>
            </div>
          </a>





      <?php


        }
      }





      ?>








    </div>
  </div>
</section>