<?php
include '../config/constants.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $country = mysqli_real_escape_string($conn, $_POST['country']);
  $category = mysqli_real_escape_string($conn, $_POST['category']);
  $price_range = mysqli_real_escape_string($conn, $_POST['price_range']);
  $duration = mysqli_real_escape_string($conn, $_POST['duration']);
  $group_size = mysqli_real_escape_string($conn, $_POST['group_size']);
  $accomodation = mysqli_real_escape_string($conn, $_POST['accomodation']);
  $meal = mysqli_real_escape_string($conn, $_POST['meal']);
  $best_season = mysqli_real_escape_string($conn, $_POST['best_season']);
  $guide = mysqli_real_escape_string($conn, $_POST['guide']);
  $transportation = mysqli_real_escape_string($conn, $_POST['transportation']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $feature = mysqli_real_escape_string($conn, $_POST['feature']);
  $map = mysqli_real_escape_string($conn, $_POST['map']);
  $add_details = mysqli_real_escape_string($conn, $_POST['add_details']);
  $inclusion_exclusion = mysqli_real_escape_string($conn, $_POST['inclusion_exclusion']);

  // Handle the main image upload
  if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
    $image = $_FILES['image']['name'];
    $tmp = explode('.', $image);
    $ext = end($tmp);
    $image = "packages-" . rand(00000, 99999) . "." . $ext;
    $src = $_FILES['image']['tmp_name'];
    $dst = "packages/img/" . $image;
    $upload = move_uploaded_file($src, $dst);
    if ($upload == false) {
      $_SESSION['upload'] = '<script> alert("Failed to upload the image"); </script>';
      header("Location: add_packages.php");
      die();
    }
  } else {
    $image = ""; // Default value
  }

  // Handle multiple gallery images upload
  $gallery_images = [];
  if (isset($_FILES['gallery']['name'])) {
    $gallery_files = $_FILES['gallery'];
    $gallery_count = count($gallery_files['name']);

    for ($i = 0; $i < $gallery_count; $i++) {
      if ($gallery_files['name'][$i] != "") {
        $gallery_image = $gallery_files['name'][$i];
        $tmp = explode('.', $gallery_image);
        $ext = end($tmp);
        $gallery_image = "gallery-" . rand(00000, 99999) . "." . $ext;
        $src = $gallery_files['tmp_name'][$i];
        $dst = "packages/img/" . $gallery_image;

        $upload = move_uploaded_file($src, $dst);
        if ($upload) {
          $gallery_images[] = $gallery_image;
        }
      }
    }
  }

  // Check for empty fields
  if (!empty($title) && !empty($country) && !empty($category) && !empty($price_range) && !empty($duration) && !empty($group_size) && !empty($accomodation) && !empty($meal) && !empty($best_season) && !empty($guide) && !empty($transportation) && !empty($description) && !empty($image) && !empty($map) && !empty($feature) && !empty($add_details) && !empty($inclusion_exclusion)) {
    $gallery_images_str = implode(',', $gallery_images);
    $query = "INSERT INTO packages (title, country, category, price_range, duration, group_size, accomodation, meal, best_season, guide, transportation, description, image, feature, map, gallery_images, add_details , inclusion_exclusion) VALUES ('$title', '$country', '$category', '$price_range', '$duration', '$group_size', '$accomodation', '$meal', '$best_season', '$guide', '$transportation', '$description', '$image', '$feature', '$map', '$gallery_images_str', '$add_details', '$inclusion_exclusion')";
    mysqli_query($conn, $query);
    header("Location: add_packages.php");
  } else {
    echo "<script> alert('Enter valid information!'); </script>";
  }
}
?>

<?php include 'includes/header.php'; ?>
<section class="backend-page">
  <?php include 'includes/nav.php'; ?>
  <div class="page">
    <h2 class="section-heading">Add Packages</h2>
    <div class="add-admin-form">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="title">Package Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Package Title">
          </div>
          <div class="form-group col-md-6">
            <label for="country">Select Country</label> <br>
            <select name="country" class="custom-select form-control">
              <option selected>Select Country</option>
              <?php
              $sql2 = "SELECT * FROM country";
              $res2 = mysqli_query($conn, $sql2);
              $count = mysqli_num_rows($res2);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res2)) {
                  $con = $row['country'];
                  echo "<option value='$con'>$con</option>";
                }
              } else {
                echo "<option value=''>No countries available</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="category">Select Category</label> <br>
            <select name="category" class="custom-select form-control">
              <option selected>Select Category</option>
              <?php
              $sql2 = "SELECT * FROM category";
              $res2 = mysqli_query($conn, $sql2);
              $count = mysqli_num_rows($res2);
              if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res2)) {
                  $con = $row['category'];
                  echo "<option value='$con'>$con</option>";
                }
              } else {
                echo "<option value=''>No categories available</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="price-range">Price Starting From In NPR</label>
            <input type="text" class="form-control" id="price-range" placeholder="Enter Price In NPR" name="price_range">
          </div>
          <div class="form-group col-md-6">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" id="duration" placeholder="Enter Duration" name="duration">
          </div>
          <div class="form-group col-md-6">
            <label for="group_size">Enter Group Size</label>
            <input type="text" class="form-control" id="group_size" placeholder="Enter Group Size" name="group_size">
          </div>
          <div class="form-group col-md-6">
            <label for="accomodation">Enter Accomodation (hotel, tent, etc.)</label>
            <input type="text" class="form-control" id="accomodation" placeholder="Enter Accomodation" name="accomodation">
          </div>
          <div class="form-group col-md-6">
            <label for="meal">Enter Meal (e.g., Breakfast, Lunch, Dinner)</label>
            <input type="text" class="form-control" id="meal" placeholder="Enter Meal" name="meal">
          </div>
          <div class="form-group col-md-6">
            <label for="best_season">Enter Best Season For Visit (e.g., Spring, Summer)</label>
            <input type="text" class="form-control" id="best_season" placeholder="Enter Best Season For Visit" name="best_season">
          </div>
          <div class="form-group col-md-6">
            <label for="guide">Guide Availability</label>
            <input type="text" class="form-control" id="guide" placeholder="Enter Guide Availability" name="guide">
          </div>
          <div class="form-group col-md-6">
            <label for="transportation">Transportation</label>
            <input type="text" class="form-control" id="transportation" placeholder="Enter Transportation" name="transportation">
          </div>
          <div class="form-group col-md-6">
            <label for="upload-image">Upload Destination Image</label>
            <input type="file" class="form-control" id="upload-image" name="image">
          </div>
          <div class="form-group col-md-6">
            <label for="gallery-image">Upload Multiple Gallery Images</label>
            <input type="file" class="form-control" id="gallery-image" name="gallery[]" multiple>
          </div>
          <div class="form-group col-md-6">
            <label for="textarea">Destination Description...</label>
            <textarea class="form-control" id="textarea" name="description" rows="3"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="map">Enter Map Iframe</label>
            <input type="text" class="form-control" id="map" placeholder="Enter Map Iframe" name="map">
          </div>
          <div class="form-group col-md-10">
            <label for="add_details">Write your Additional details </label>
            <textarea id="editor" class="form-control" name="add_details" rows="8" placeholder="Write your additional details..."></textarea><br>
          </div>
          <div class="form-group col-md-10">
            <label for="add_details">Write Inclusion Exclusion</label>
            <textarea id="editor2" class="form-control" name="inclusion_exclusion" rows="8" placeholder="Write your additional details..."></textarea><br>
          </div>
          <div class="form-group col-md-6">
            <label for="feature">Select Yes To Feature On Home Page</label>
            <select name="feature" class="custom-select form-control">
              <option value="no" selected>No</option>
              <option value="yes">Yes</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" class="btn-done">Add Packages</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
      console.error(error);
    });
  ClassicEditor
    .create(document.querySelector('#editor2'))
    .catch(error => {
      console.error(error);
    });
</script>

<?php include 'includes/footer.php'; ?>