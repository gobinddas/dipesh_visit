<?php
include '../config/constants.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $country = $_POST['country'];
  if (!empty($country)) {
    $query = "INSERT INTO country (country) VALUES ('$country')";
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
    <h2 class="section-heading">Manage Countries</h2>

    <div class="manage-table inquiries_content">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Country</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM country";
          $result = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($result);
          $sn = 1;

          if ($count > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $country = $row['country'];
          ?>
              <tr>
                <th scope="row"><?php echo $sn++; ?></th>
                <td><?php echo $country; ?></td>
                <td class="btn-row">
                  <a href="<?php echo SITEURL; ?>admin/delete_country.php?id=<?php echo $id; ?>" class="btn-red">Delete</a>
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
      <h2 class="section-heading">Add Country</h2>
      <form method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fname">Add Country</label>
            <input type="text" class="form-control" id="fname" name="country" placeholder="Enter Country Name">
          </div>
        </div>
        <div class="form-group"><button type="submit" class="btn-done">Add Country</button></div>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>