<section class="section-padding index-packages">
  <div class="container">
    <h4 class="section-title">Our Available <span>Packages</span></h4>

    <div class="package-select">
      <div class="package-buttons">
        <?php
        // Fetch categories from the database
        $sql2 = "SELECT * FROM category";
        $result2 = mysqli_query($conn, $sql2);

        if ($result2) {
          while ($row = mysqli_fetch_assoc($result2)) {
            $category = strtolower($row['category']);
            $activeClass = ($category === 'adventure') ? 'active' : ''; // Set 'Adventure' as active by default
        ?>
            <a href="#" class="button <?php echo $category ?> <?php echo $activeClass ?>" data-category="<?php echo $category ?>">
              <?php echo ucfirst($row['category']) ?>
            </a>
        <?php
          }
        }
        ?>
      </div>

      <?php
      // Fetch and display packages for each category
      $sql3 = "SELECT DISTINCT category FROM packages";
      $result3 = mysqli_query($conn, $sql3);

      if ($result3) {
        while ($row = mysqli_fetch_assoc($result3)) {
          $category = strtolower($row['category']);
          $activeClass = ($category === 'adventure') ? 'active' : ''; // Set 'Adventure' as active by default

          // Fetch packages for the current category
          $sql = "SELECT * FROM packages WHERE category = '" . ucfirst($row['category']) . "' LIMIT 8";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            echo '<div class="package-row ' . $category . ' ' . $activeClass . '">';
            while ($row = mysqli_fetch_assoc($result)) {
              $title = $row['title'];
              $country = $row['country'];
              $image = $row['image'];
              $id = $row['id'];
      ?>
              <a class="card-item" href="packages_post.php?id=<?php echo $id ?>">
                <div class="img"><img src="<?php echo SITEURL; ?>admin/packages/img/<?php echo $image ?>" alt=""></div>
                <div class="content">
                  <h3 class="card-title"><?php echo $title ?></h3>
                  <p class="card-des"><i class="fa-solid fa-location-dot"></i><?php echo $country ?></p>
                </div>
              </a>
      <?php
            }
            echo '</div>';
          }
        }
      }
      ?>
    </div>
  </div>
</section>