<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  // collect form data 
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $destination = $_POST['destination'];
  $message = $_POST['message'];

  // validate that all field are filled 

  if (!empty($fname) && !empty($email) && !empty($phone) && !empty($destination) && !empty($message)) {

    // sql query to insert data into the inqiries table 
    $query = "INSERT INTO inquires(name, phone, email, destination, message, created_on ) VALUES ('$fname', '$phone', '$email', '$destination', '$message', NOW() )";

    // execute the query 
    if (mysqli_query($conn, $query)) {
      // redirect to the thank you page on success 
      header("Location: thanks.php");
      exit();
    } else {
      // handle query execution failure 
      echo "<script>alert('Failed to submit inquiry. Please try again.');</script>";
    }
  } else {
    echo "<script>alert('Enter valid information!');</script>";
  }
}




?>





<?php $page = 'contact' ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>


<section class=" bc-padding contact-page">
  <div class="container">
    <h2 class="section-heading">Contact us</h2>
    <p class="section-des">Contact us directly for bookings and appointments. Visit us in person using Google Maps. The form below is for business inquiries only; your data will remain confidential and not shared with third parties</p>
    <div class="contact-row">
      <div class="details">

        <div class="map">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.379344592882!2d85.33183547497502!3d27.705571525570658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199ffe9d7c6b%3A0x91b3a969f305a0bc!2sMaitidevi%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1720334611397!5m2!1sen!2snp" width="100" style="border:0;"></iframe>

        </div>
      </div>

      <div class="form">
        <form action="" method="POST">
          <h3 class="section-title">Send your request</h3>
          <div class="form-group">
            <input type="text" placeholder="Enter your name" name="fname">
            <input type="email" placeholder="Enter our email" name="email">
          </div>
          <div class="form-group">
            <input type="tel" placeholder="Enter your phone number" name="phone">
            <select id="destination" name="destination">
              <option value="nepal">Nepal</option>
              <option value="saarc">SAARC</option>
              <option value="others">Others</option>
            </select>
          </div>
          <textarea name="message" id="" placeholder="enter your message.."></textarea> <br>
          <input type="submit" value="Submit">
        </form>
      </div>




    </div>
  </div>
</section>


<?php include 'includes/topfooter.php'; ?>


<?php include 'includes/footer.php'; ?>