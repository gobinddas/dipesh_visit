<?php $page = 'packages'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class=" index-packages bc-padding">
  <div class="container">
    <h4 class="section-title">Our All <span>Packages</span></h4>

    <div class="package-select">
      <div class="package-buttons">
        <!-- Set the 'All' button as active by default -->
        <a href="#" class="button all active" data-category="all">All</a>
        <?php
        // Fetch categories from the database
        $sql2 = "SELECT * FROM category";
        $result2 = mysqli_query($conn, $sql2);

        if ($result2) {
          while ($row = mysqli_fetch_assoc($result2)) {
            $category = strtolower($row['category']);
            // Ensure no category button has 'active' class by default
        ?>
            <a href="#" class="button <?php echo $category ?>" data-category="<?php echo $category ?>">
              <?php echo ucfirst($row['category']) ?>
            </a>
        <?php
          }
        }
        ?>
      </div>

      <?php
      // Fetch and display all packages
      $sqlAll = "SELECT * FROM packages LIMIT 8";
      $resultAll = mysqli_query($conn, $sqlAll);

      if ($resultAll) {
        echo '<div class="package-row all active">';
        while ($row = mysqli_fetch_assoc($resultAll)) {
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

      // Fetch and display packages for each category
      $sql3 = "SELECT DISTINCT category FROM packages";
      $result3 = mysqli_query($conn, $sql3);

      if ($result3) {
        while ($row = mysqli_fetch_assoc($result3)) {
          $category = strtolower($row['category']);

          // Fetch packages for the current category
          $sql = "SELECT * FROM packages WHERE category = '" . ucfirst($row['category']) . "' LIMIT 8";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            echo '<div class="package-row ' . $category . '">';
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

<script>
  document.querySelectorAll('.package-buttons .button').forEach(button => {
    button.addEventListener('click', function(e) {
      e.preventDefault();

      document.querySelectorAll('.package-buttons .button').forEach(btn => btn.classList.remove('active'));
      this.classList.add('active');

      const category = this.getAttribute('data-category');
      document.querySelectorAll('.package-row').forEach(row => {
        if (category === 'all') {
          row.classList.add('active');
        } else {
          row.classList.remove('active');
        }
      });
      if (category !== 'all') {
        document.querySelector(`.package-row.${category}`).classList.add('active');
      }
    });
  });
</script>

<?php include 'includes/topfooter.php'; ?>
<?php include 'includes/footer.php'; ?>