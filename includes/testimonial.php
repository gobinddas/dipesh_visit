<section class="section-padding index-testimonial">
  <div class="container">
    <h4 class="section-title">Our <span>Testimonial</span></h4>
    <p class="section-des">Explore top destinations with peak climbing, trekking, and exciting day trips.</p>

    <div class="testimonial-row owl-carousel owl-theme ">

      <?php
      // create a sql query to get a data from dataase 

      $sql = "SELECT * FROM testimonial LIMIT 4";
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);

      $sn = 1;

      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $name = $row['name'];
          $img = $row['client_img'];
          $message = $row['client_message'];
          $destination = $row['destination'];


      ?>

          <div class="testimonial-item">
            <img src="./images/quote.png" class="quote" alt="">
            <p class="section-des"><?php echo $message ?></p>
            <p class="name"> <span>-</span><?php echo ucfirst($name) ?></p>
            <p class="package"><?php echo ucfirst($destination) ?></p>
            <img src="./admin/testimonial/img/<?php echo $img ?>" alt="" class="profile">

          </div>
      <?php
        }
      }

      ?>




    </div>

  </div>
</section>