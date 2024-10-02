<?php
$page = 'search';

include 'includes/header.php';
include 'includes/navbar.php';
?>

<section class="bc-padding">
  <div class="container">
    <h4 class="section-title">Searched Result</h4>

    <div class="package-select">
      <div class="search-row">
        <?php
        // Check if search query is set
        if (isset($_GET['search'])) {
          $search = strtolower($_GET['search']);
          $searchParam = "%" . $search . "%";

          // Prepare the SQL statement to prevent SQL injection
          $stmt = $conn->prepare("SELECT * FROM packages WHERE LOWER(country) LIKE ? OR LOWER(title) LIKE ? OR LOWER(category) LIKE ?");
          $stmt->bind_param("sss", $searchParam, $searchParam, $searchParam);
          $stmt->execute();
          $result = $stmt->get_result();
          $count = $result->num_rows;

          if ($count > 0) {
            while ($row = $result->fetch_assoc()) {
              $title = $row['title'];
              $category = $row['category'];
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
          } else {
            echo '<p style="color: red; font-size: 16px; font-family: cursive;">No results found for "' . htmlspecialchars($search) . '" <a href="./" style="color: blue; font-size: 19px; font-family: cursive;"><i class="fa-solid fa-rotate-left"></i> Back</a></p>';
          }

          // Close the statement
          $stmt->close();
        } else {
          echo '<p>No search query provided.</p>';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/topfooter.php'; ?>
<?php include 'includes/footer.php'; ?>