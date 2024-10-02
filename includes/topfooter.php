<footer class="section-padding">
  <div class="container">

    <div class="row">
      <div class="col-lg-5 col-md-12 ">
        <div class="footer-block footer-content-block">
          <div class="logo">
            <img src="./images/logo.png" alt="">
          </div>

          <p class="section-des">Explore the world with Visit Abroad Travels. Exceptional all-inclusive packages tailored for unforgettable experiences. Please contact us via phone or email.
          </p>
          <div class="social-icon">
            <a href=""><i class="fa-brands fa-square-facebook"></i></a>
            <a href=""><i class="fa-brands fa-square-instagram"></i></a>
            <a href=""><i class="fa-brands fa-square-twitter"></i></a>
          </div>

        </div>
      </div>
      <div class="col-lg-2 col-md-12 ">
        <div class="footer-block ">
          <h4 class="block-heading">Quick Link</h4>
          <ul class="footer-nav">
            <li class="footer-nav-item"><a href="./" class="footer-nav-link">Home </a></li>
            <li class="footer-nav-item"><a href="about" class="footer-nav-link">About Us </a></li>
            <li class="footer-nav-item"><a href="packages" class="footer-nav-link">Packages </a></li>
            <li class="footer-nav-item"><a href="blog" class="footer-nav-link">Blogs</a></li>
            <li class="footer-nav-item"><a href="contact" class="footer-nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-12 ">
        <div class="footer-block ">
          <h4 class="block-heading">Destination</h4>
          <ul class="footer-nav">
            <?php
            $sql = "SELECT * FROM packages LIMIT 5";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);
            if ($count > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $id = $row['id'];
            ?>
                <li class="footer-nav-item"><a href="packages_post.php?id=<?php echo  $id ?>" class="footer-nav-link"><?php echo $title ?></a></li>

            <?php
              }
            }

            ?>

          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 ">
        <div class="footer-block ">
          <h4 class="block-heading">Contacts</h4>
          <ul class="footer-nav">
            <li class="footer-nav-item"><a href="" class="footer-nav-link"><i class="fa-solid fa-envelope"></i> <?php echo $email; ?> </a></li>
            <li class="footer-nav-item"><a href="" class="footer-nav-link"><i class="fa-solid fa-phone"></i> <?php echo $phone; ?> </a></li>
            <li class="footer-nav-item"><a href="" class="footer-nav-link"><i class="fa-solid fa-location-dot"></i> <?php echo $add; ?> </a></li>

          </ul>
        </div>
      </div>



    </div>

  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="bottom-wrapper">
        <div class="block">
          <p>© Copyright <?php echo date('Y'); ?> <a href="./"><?php echo $co; ?></a> All rights reserved<a href="https://connectifisolutions.com/" target="_blank">Connetifi.</a><a style="color: white;" href="https://bluebugsoft.com/" target="_blank">developed by BlueBug</a></p>

        </div>

      </div>
    </div>
  </div>

</footer>






<div class="mobile-call-button">
  <a href="tel:<?php echo $phone; ?>"><i class="fa fa-phone"></i></a>
</div>
<a class="scrollToTop" href="#">
  <button class="btn btn-scroll-up"><i class="fa fa-chevron-up"></i></button></a>