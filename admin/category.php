<?php
include '../config/constants.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $category = $_POST['category'];
  if (!empty($category)) {
    $query = "INSERT INTO category (category) VALUES ('$category')";
    mysqli_query($conn, $query);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
  } else {
    echo "<alert>Enter valid Information</alert>";
  }
}

include 'includes/header.php';
?>

<section class="backend-page">
  <?php include 'includes/nav.php'; ?>

  <div class="page country_admin">
    <h2 class="section-heading">Manage Category</h2>

    <div class="manage-table inquiries_content">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Category</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM category";
          $result = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($result);
          $sn = 1;

          if ($count > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $category = $row['category'];
          ?>
              <tr>
                <th scope="row"><?php echo $sn++; ?></th>
                <td><?php echo $category; ?></td>
                <td class="btn-row">
                  <a href="<?php echo SITEURL; ?>admin/delete_category.php?id=<?php echo $id; ?>" class="btn-red">Delete</a>
                </td>
              </tr>
          <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>



    <div class="country_add">
      <h2 class="section-heading">Add Category</h2>
      <form method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fname">Add Packages Category</label>
            <input type="text" class="form-control" id="fname" name="category" placeholder="Enter Category  Name">
          </div>
        </div>
        <div class="form-group"><button type="submit" class="btn-done">Add Category</button></div>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>