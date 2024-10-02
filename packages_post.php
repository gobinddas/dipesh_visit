<?php

include 'includes/header.php';
$page = 'blogpost';
$id = intval($_GET['id']);  // Ensure id is an integer to prevent SQL injection

// Fetch package data from the database
$sql = "SELECT * FROM packages WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
  echo "Package not found.";
  exit;
}

$row = mysqli_fetch_assoc($result);
$title = htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8');
$country = htmlspecialchars($row['country'], ENT_QUOTES, 'UTF-8');
$category = htmlspecialchars($row['category'], ENT_QUOTES, 'UTF-8');
$price_range = htmlspecialchars($row['price_range'], ENT_QUOTES, 'UTF-8');
$duration = htmlspecialchars($row['duration'], ENT_QUOTES, 'UTF-8');
$group_size = htmlspecialchars($row['group_size'], ENT_QUOTES, 'UTF-8');
$accomodation = htmlspecialchars($row['accomodation'], ENT_QUOTES, 'UTF-8');
$meal = htmlspecialchars($row['meal'], ENT_QUOTES, 'UTF-8');
$best_season = htmlspecialchars($row['best_season'], ENT_QUOTES, 'UTF-8');
$guide = htmlspecialchars($row['guide'], ENT_QUOTES, 'UTF-8');
$transportation = htmlspecialchars($row['transportation'], ENT_QUOTES, 'UTF-8');
$description = htmlspecialchars($row['description'], ENT_QUOTES, 'UTF-8');
$image = htmlspecialchars($row['image'], ENT_QUOTES, 'UTF-8');
$feature = htmlspecialchars($row['feature'], ENT_QUOTES, 'UTF-8');
$map = htmlspecialchars($row['map'], ENT_QUOTES, 'UTF-8');
$gallery_images_str = htmlspecialchars($row['gallery_images'], ENT_QUOTES, 'UTF-8');
$add_details = $row['add_details'];
$inclusion_exclusion = $row['inclusion_exclusion'];

// Convert comma-separated list to array
$gallery_images = explode(',', $gallery_images_str);

// Fetch itinerary data
$itinerary_sql = "SELECT day, question, answer FROM itineraries WHERE package_id=$id ORDER BY day ASC";
$itinerary_result = mysqli_query($conn, $itinerary_sql);

$itineraries = [];
if ($itinerary_result) {
  while ($itinerary_row = mysqli_fetch_assoc($itinerary_result)) {
    $itineraries[] = $itinerary_row;
  }
}

include 'includes/navbar.php'; ?>

<div class="packages_post-page bc-padding">
  <div class="container">
    <div class="post-img">
      <img src="<?php echo SITEURL; ?>admin/packages/img/<?php echo $image ?>" alt="<?php echo $title ?>">
    </div>

    <div class="post-btn">
      <div class="btn"><a href="#overview">Trip Overview</a></div>
      <div class="btn"><a href="#itinerary">Itinerary Details</a></div>
      <div class="btn"><a href="#additional">Additional Info</a></div>
      <div class="btn"><a href="#inclusion">Inclusion & Exclusion</a></div>
      <div class="btn"><a href="#map">Trip Map</a></div>
      <div class="btn"><a href="#gallery">Gallery</a></div>
    </div>
    <h4 class="section-heading"><?php echo $title ?></h4>
    <div class="package_content ">
      <div class="content">

        <div class="overview-block card-item" id="overview">
          <h3 class="section-title">Trip Overview</h3>
          <div class="details-list">
            <p class="item"><span><i class="fa-regular fa-clock"></i> Duration: </span> <?php echo $duration ?></p>
            <p class="item"><span><i class="fa-solid fa-person-hiking"></i> Guided Service: </span> <?php echo $guide ?></p>
            <p class="item"><span><i class="fa-solid fa-people-group"></i> Group Size: </span> <?php echo $group_size ?></p>
            <p class="item"><span><i class="fa-solid fa-house-user"></i> Accomodation: </span> <?php echo $accomodation ?></p>
            <p class="item"><span><i class="fa-solid fa-utensils"></i> Meal: </span> <?php echo $meal ?></p>
            <p class="item"><span><i class="fa-solid fa-wind"></i> Best Season: </span> <?php echo $best_season ?></p>
            <p class="item"><span><i class="fa-solid fa-bus"></i> Transportation: </span> <?php echo $transportation ?></p>
            <p class="item"><span><i class="fa-solid fa-rupee-sign"></i> Price Starting in NPR: </span> <?php echo $price_range ?></p>
          </div>

          <p class="section-des"><?php echo $description ?></p>
        </div>

        <div class="itinerary-block card-item" id="itinerary">
          <h4 class="section-title">Detailed Itinerary</h4>
          <div class="itinerary">
            <?php foreach ($itineraries as $itinerary) : ?>
              <div class="item">
                <h6 class="question"><i class="fa-solid fa-circle-plus"></i><span> <?php echo htmlspecialchars($itinerary['question'], ENT_QUOTES, 'UTF-8'); ?></span></h6>
                <p class="section-des"><?php echo htmlspecialchars($itinerary['answer'], ENT_QUOTES, 'UTF-8'); ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="card-item" id="additional">
          <h4 class="section-title">Additional Details</h4>
          <div class="itinerary">
            <?php echo  $add_details ?>
          </div>
        </div>
        <div class="card-item" id="inclusion">
          <h4 class="section-title">Inclusion & Exclusion</h4>
          <div class="itinerary">
            <?php echo  $inclusion_exclusion ?>
          </div>
        </div>

        <div class="map-block card-item" id="map">
          <h4 class="section-title">Tour Map</h4>
          <iframe src="<?php echo $map; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="side-section">
        <div class="gallery-block card-item" id="gallery">
          <h3 class="section-title">Gallery</h3>
          <div class="gallery popup-gallery">
            <?php foreach ($gallery_images as $gallery_image) : ?>
              <a href="<?php echo SITEURL; ?>admin/packages/img/<?php echo $gallery_image ?>" title="<?php echo $title; ?>">
                <img src="<?php echo SITEURL; ?>admin/packages/img/<?php echo $gallery_image ?>" alt="<?php echo $title; ?>">
              </a>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="book-now card-item">
          <?php
          if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Sanitize form inputs
            $fname = mysqli_real_escape_string($conn, $_POST['fname']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $package = mysqli_real_escape_string($conn, $_POST['package']);
            $message = mysqli_real_escape_string($conn, $_POST['message']);

            // Validate that all fields are filled
            if (!empty($fname) && !empty($email) && !empty($phone) && !empty($package) && !empty($message)) {
              // SQL query to insert data into the inquiries table
              $query = "INSERT INTO packages_inquiries (name, phone, email, packages, message, created_on) 
                        VALUES ('$fname', '$phone', '$email', '$package', '$message', NOW())";

              // Execute the query
              if (mysqli_query($conn, $query)) {
                // Redirect to the thank you page on success
                header("Location: thanks.php");
                exit();
              } else {
                // Handle query execution failure
                echo "<script>alert('Failed to submit inquiry. Please try again.');</script>";
              }
            } else {
              echo "<script>alert('Please fill in all fields with valid information.');</script>";
            }
          }
          ?>

          <form action="" method="post">
            <div class="input-block">
              <input type="text" name="fname" placeholder="Full Name" class="input-field" required>
              <input type="tel" name="phone" placeholder="Phone Number" class="input-field" required>
              <input type="email" name="email" placeholder="Email Address" class="input-field" required>
              <input type="hidden" name="package" value="<?php echo $title ?>">
              <textarea name="message" placeholder="Type Your Message" class="input-field" rows="5"></textarea>
              <input type="submit" class="cta-btn" value="Send Inquiry">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>