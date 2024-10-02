<?php
include '../config/constants.php';

// Get data from the database
$id = intval($_GET['id']);
$sql = "SELECT * FROM packages WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);

  $title = $row['title'];
  $country = $row['country'];
  $category = $row['category'];
  $price_range = $row['price_range'];
  $duration = $row['duration'];
  $group_size = $row['group_size'];
  $accomodation = $row['accomodation'];
  $meal = $row['meal'];
  $best_season = $row['best_season'];
  $guide = $row['guide'];
  $transportation = $row['transportation'];
  $description = $row['description'];
  $image = $row['image'];
  $feature = $row['feature'];
  $map = $row['map'];
  $add_details = $row['add_details'];
  $inclusion_exclusion = $row['inclusion_exclusion'];
  $current_img = $image;
  $gallery_images = explode(',', $row['gallery_images']);
} else {
  echo "Error retrieving package data.";
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

  // Handle main image upload
  $new_img = $_FILES['image']['name'];
  if ($new_img != "") {
    $tmp = explode('.', $new_img);
    $ext = end($tmp);
    $new_img = "packages-" . rand(00000, 99999) . "." . $ext;
    $src = $_FILES['image']['tmp_name'];
    $dst = "./packages/img/" . $new_img;

    if (!move_uploaded_file($src, $dst)) {
      echo '<script>alert("Failed to upload the image.");</script>';
      exit;
    }
  } else {
    $new_img = $current_img;
  }

  // Handle gallery image upload
  $uploaded_gallery_images = [];
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
        $dst = "./packages/img/" . $gallery_image;

        if (move_uploaded_file($src, $dst)) {
          $uploaded_gallery_images[] = $gallery_image;
        }
      }
    }
  }

  // Combine existing and new gallery images
  $all_gallery_images = array_merge($gallery_images, $uploaded_gallery_images);
  $gallery_images_str = implode(',', $all_gallery_images);

  // Validate all required fields
  if (!empty($title) && !empty($country) && !empty($category) && !empty($price_range) && !empty($duration) && !empty($group_size) && !empty($accomodation) && !empty($meal) && !empty($best_season) && !empty($guide) && !empty($transportation) && !empty($description) && !empty($map) && !empty($feature) && !empty($add_details)) {
    $query = "UPDATE packages SET 
                        title = '$title', 
                        country = '$country', 
                        category = '$category', 
                        price_range = '$price_range', 
                        duration = '$duration', 
                        group_size = '$group_size', 
                        accomodation = '$accomodation', 
                        meal = '$meal', 
                        best_season = '$best_season', 
                        guide = '$guide', 
                        transportation = '$transportation', 
                        description = '$description', 
                        image = '$new_img', 
                        feature = '$feature', 
                        add_details = '$add_details', 
                        inclusion_exclusion = '$inclusion_exclusion', 
                        map = '$map',
                        gallery_images = '$gallery_images_str'
                      WHERE id = $id";
    if (mysqli_query($conn, $query)) {
      header("Location: manage_packages.php");
    } else {
      echo '<script>alert("Failed to update package.");</script>';
    }
  } else {
    echo '<script>alert("Enter valid information!");</script>';
  }
}

// Handle deletion of gallery images
if (isset($_GET['delete_image'])) {
  $image_to_delete = mysqli_real_escape_string($conn, $_GET['delete_image']);
  $updated_gallery_images = array_filter($gallery_images, function ($img) use ($image_to_delete) {
    return $img !== $image_to_delete;
  });

  if (unlink("./packages/img/" . $image_to_delete)) {
    $gallery_images_str = implode(',', $updated_gallery_images);
    $query = "UPDATE packages SET gallery_images = '$gallery_images_str' WHERE id = $id";
    if (mysqli_query($conn, $query)) {
      header("Location: edit_packages.php?id=$id");
    } else {
      echo '<script>alert("Failed to update gallery images.");</script>';
    }
  } else {
    echo '<script>alert("Failed to delete image file.");</script>';
  }
}
?>

<?php include 'includes/header.php'; ?>
<section class="backend-page">
  <?php include 'includes/nav.php'; ?>
  <div class="page">
    <h2 class="section-heading">Edit Packages</h2>
    <div class="add-admin-form">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <!-- Form Fields -->
          <div class="form-group col-md-6">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="country">Country</label>
            <select name="country" class="custom-select form-control">
              <option selected><?php echo $country ?></option>
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
            <label for="category">Category</label>
            <select name="category" class="custom-select form-control">
              <option selected><?php echo $category ?></option>
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
            <label for="price_range">Price Range</label>
            <input type="text" class="form-control" id="price_range" name="price_range" value="<?php echo htmlspecialchars($price_range, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration" value="<?php echo htmlspecialchars($duration, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="group_size">Group Size</label>
            <input type="text" class="form-control" id="group_size" name="group_size" value="<?php echo htmlspecialchars($group_size, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="accomodation">Accommodation</label>
            <input type="text" class="form-control" id="accomodation" name="accomodation" value="<?php echo htmlspecialchars($accomodation, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="meal">Meal</label>
            <input type="text" class="form-control" id="meal" name="meal" value="<?php echo htmlspecialchars($meal, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="best_season">Best Season</label>
            <input type="text" class="form-control" id="best_season" name="best_season" value="<?php echo htmlspecialchars($best_season, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="guide">Guide</label>
            <input type="text" class="form-control" id="guide" name="guide" value="<?php echo htmlspecialchars($guide, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="transportation">Transportation</label>
            <input type="text" class="form-control" id="transportation" name="transportation" value="<?php echo htmlspecialchars($transportation, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="feature">Feature</label>
            <input type="text" class="form-control" id="feature" name="feature" value="<?php echo htmlspecialchars($feature, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="map">Map</label>
            <input type="text" class="form-control" id="map" name="map" value="<?php echo htmlspecialchars($map, ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="image">Main Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <?php if ($current_img != "") : ?>
              <img src="./packages/img/<?php echo htmlspecialchars($current_img, ENT_QUOTES, 'UTF-8'); ?>" alt="Main Image" style="width: 100px; margin-top: 10px;">
            <?php endif; ?>
          </div>
          <div class="form-group col-md-6">
            <label for="gallery-image">Upload Multiple Gallery Images</label>
            <input type="file" class="form-control" id="gallery-image" name="gallery[]" multiple>
          </div>


          <div class="form-group col-md-10">
            <label for="add_details">Write Addtitional Details</label>
            <textarea id="editor" class="form-control" name="add_details" rows="8" placeholder="Write  Additional Details here..."> <?php echo $add_details; ?></textarea><br>
          </div>
          <div class="form-group col-md-10">
            <label for="add_details">Write Inclusion Exclusion</label>
            <textarea id="editor2" class="form-control" name="inclusion_exclusion" rows="8" placeholder="Write  Additional Details here..."> <?php echo $inclusion_exclusion; ?></textarea><br>
          </div>


          <div class="form-group col-md-6">
            <label>Current Gallery Images</label>
            <?php if (!empty($gallery_images)) : ?>
              <div>
                <?php foreach ($gallery_images as $image) : ?>
                  <div style="display: inline-block; position: relative;">
                    <img src="./packages/img/<?php echo htmlspecialchars($image, ENT_QUOTES, 'UTF-8'); ?>" alt="Gallery Image" style="width: 100px; margin: 5px;">
                    <a href="edit_packages.php?id=<?php echo $id; ?>&delete_image=<?php echo htmlspecialchars($image, ENT_QUOTES, 'UTF-8'); ?>" onclick="return confirm('Are you sure you want to delete this image?');" style="position: absolute; top: 0; right: 0; background: red; color: white; padding: 2px; text-decoration: none;">X</a>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php else : ?>
              <p>No gallery images available.</p>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <button type="submit" class="btn-done">Edit Packages</button>
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