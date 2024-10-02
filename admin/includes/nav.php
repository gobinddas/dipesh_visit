<?php
include '../config/functions.php';
$index_user_data = index_loginval($conn);


$email_login = $index_user_data['email'];
$user_type = $index_user_data['user_type'];

if ($index_user_data == false) {
  header("Location: ../index.php");
}



?>
<div class="backend-nav">




  <div class="sidenav-header">
    <img src="../images/logo.png" alt="">

  </div>
  <div class="sidenav-body">
    <ul class="navbar-nav  ">
      <?php
      if ($user_type == "admin") {
        echo ('
  <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="dashboard">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " aria-current="page" href="inquiries">Inqiries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " aria-current="page" href="past_inquiries">Past Inqiries</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Blogs
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="add_blogs">Add blog</a></li>
          <li><a class="dropdown-item" href="manage_blogs">Manage blog</a></li>

        </ul>

      </li>
      <li class="nav-item ">
        <a class="nav-link " href="country" role="button" aria-expanded="false">
          Country
        </a>


      </li>
      <li class="nav-item ">
        <a class="nav-link " href="category" role="button" aria-expanded="false">
          Category
        </a>


      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Packages
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="add_packages">Add Packages</a></li>
          <li><a class="dropdown-item" href="manage_packages">Manage Packages</a></li>

        </ul>

      </li>




    

              <li class="nav-item ">
        <a class="nav-link " href="add_itinerary" role="button" aria-expanded="false">
          Add Itinerary
        </a>


      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Admin
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="add_admin">Add Admin</a></li>
          <li><a class="dropdown-item" href="manage_admin">Manage Admin</a></li>

        </ul>

      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Testimonials
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="add_testimonials">Add Testimonials</a></li>
          <li><a class="dropdown-item" href="manage_testimonials">Manage Testimonials</a></li>

        </ul>

      </li>

');
      } else {
        echo ('
        <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard">Dashboard</a>
            </li>
            
      
      
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Blogs
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="add_blogs">Add blog</a></li>
                <li><a class="dropdown-item" href="manage_blogs">Manage blog</a></li>
      
              </ul>
      
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="country" role="button" aria-expanded="false">
                Country
              </a>
      
      
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Packages
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="add_packages">Add Packages</a></li>
                <li><a class="dropdown-item" href="manage_packages">Manage Packages</a></li>
      
              </ul>
      
            </li>
            </li>




    

              <li class="nav-item ">
        <a class="nav-link " href="add_itinerary" role="button" aria-expanded="false">
          Add Itinerary
        </a>


      </li>
           
        
      
      
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Testimonials
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="add_testimonials">Add Testimonials</a></li>
                <li><a class="dropdown-item" href="manage_testimonials">Manage Testimonials</a></li>
      
              </ul>
      
            </li>
      
      ');
      }

      ?>




    </ul>
    <div class="nav-btn"><a class="btn-red" href="logout">Logout</a></div>

  </div>



</div>