<section id="banner" class="banner">
    <div class="hero-banner-slider owl-carousel owl-theme">

        <?php

        $sql = "SELECT * FROM packages LIMIT 4";
        $result = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($result);
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $image = $row['image'];
        ?>
                <div class="item">
                    <img src="<?php echo SITEURL; ?>admin/packages/img/<?php echo $image ?>" alt="">

                </div>

        <?php
            }
        }

        ?>





    </div>
    <div class="container">

        <div class="banner-row">
            <div class="hero-baner-content">
                <h1 class="baner-title">Where Your <span>Next Adventure</span> Begins?</h1>

                <p class="banner-description">Discover Nepal's wonders with Visit Abroad Travel. From peak climbing and trekking to day trips and more, our diverse packages cater to all adventurers. Embark on your unforgettable journey today!</p>
                <div class="search">

                    <form class="banner-form" action="search" method="GET">
                        <input type="text" placeholder="Search Your Destination...." name="search">

                        <button><i class="fa-solid fa-magnifying-glass"></i></button>

                    </form>
                </div>

            </div>
            <div class="banner-front-img owl-carousel owl-theme ">





                <?php

                $sql = "SELECT * FROM packages LIMIT 4";
                $result = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $title = $row['title'];
                        $image = $row['image'];
                ?>
                        <div class="item">
                            <img src="<?php echo SITEURL; ?>admin/packages/img/<?php echo $image ?>" alt="">
                            <h2><?php echo $title ?></h2>

                        </div>

                <?php
                    }
                }

                ?>

            </div>

        </div>





    </div>
</section>