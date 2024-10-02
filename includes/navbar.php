<header class="header ">
  <div class="container">

    <nav class="navbar  navbar-expand-lg">
      <div class="container-fluid ">
        <a class="navbar-brand" href="./"><img src="./images/logo.png" alt=""></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">



          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="./images/logo.png" alt=""></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav  ">
              <li class="nav-item  <?php if ($page == 'home') {
                                      echo 'active';
                                    } ?>">
                <a href="./" class="nav-link">Home</a>
              </li>

              <li class="nav-item <?php if ($page == 'about') {
                                    echo 'active';
                                  } ?>">
                <a href="about" class="nav-link">About Us</a>
              </li>


              <li class="nav-item <?php if ($page == 'packages') {
                                    echo 'active';
                                  } ?>">
                <a href="packages" class="nav-link">Packages</a>
              </li>




              <li class="nav-item <?php if ($page == 'blog') {
                                    echo 'active';
                                  } ?>">
                <a href="blog" class="nav-link">Blogs</a>
              </li>
              <li class="nav-item contact-ss <?php if ($page == 'contact') {
                                                echo 'active';
                                              } ?>">
                <a href="contact" class="nav-link">Contact</a>
              </li>


            </ul>



          </div>

        </div>
        <div class="cnt-btn">
          <a href="contact" class="btn-primary">Contact Us</a>
        </div>
      </div>
    </nav>


  </div>
</header>