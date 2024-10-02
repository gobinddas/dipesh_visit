<?php include '../config/constants.php'; ?>


<?php include 'includes/header.php'; ?>
<section class="backend-page ">
  <?php include 'includes/nav.php'; ?>
  <div class="page">
    <h2 class="section-heading">Manage Packages</h2>

    <div class="inquiries_content">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Packages Title</th>
            <th scope="col">Country</th>
            <th scope="col">Category</th>
            <th scope="col">Featured</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $sql = "SELECT * FROM packages";

          $result = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($result);

          $sn = 1;
          if ($count > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $title = $row['title'];
              $country = $row['country'];
              $category = $row['category'];
              $feature = $row['feature'];
              $image = $row['image'];

          ?>




              <tr>
                <th scope="row"><?php echo $sn++; ?></th>
                <td><?php echo ucfirst($title)  ?></td>
                <td><?php echo $country ?></td>
                <td><?php echo $category ?></td>
                <td><?php echo $feature ?></td>

                <td> <img src="./packages/img/<?php echo $image ?>" alt=""> </td>

                <td class="btn-row ">

                  <a href="<?php echo SITEURL; ?>admin/edit_packages.php?id=<?php echo $id; ?>" class="btn-done">Edit</a>
                  <a href="<?php echo SITEURL; ?>admin/delete_packages.php?id=<?php echo $id; ?>&image=<?php echo $image ?>" class="btn-red">Delete</a>
                </td>

              </tr>
          <?php
            }
          }


          ?>





        </tbody>
      </table>
    </div>

  </div>

</section>

<?php include 'includes/footer.php'; ?>