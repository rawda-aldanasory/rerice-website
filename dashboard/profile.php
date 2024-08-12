<title>Profile</title>
<link rel="stylesheet" href="../CSS/rank_style/style.css">
<link rel="stylesheet" href="profile.css">

<?php
include '..\nav.php';
?>
<div class="container-fluid d-flex justify-content-between align-content-center">
  <?php if ($role == 'admin' && $name != "Guest") { ?>

    <?php
    include 'sidebar.php';
    ?>
  <?php } ?>
  <div class="w-100 m-3" id="product" style="border:1px solid blue;background-color: #4d774e;border-radius: 10px;">
    <!-- <div class="row bg-primry"> -->


      <!-- <div class="col-lg-12"> -->

        <div class="row p-3 text-center m-3">
          <!-- My profile section -->
          <div class="col-lg-4">
            <div class="card shadow-sm  text-center mt-5">
              <div class="card-header bg-transparent text-center">
                <img class="profile_img" src="http://localhost/rerice_final_version2/rawda/<?php echo $_SESSION['image'] ?>" alt="student dp" width="150px">
                <h3><?php echo $_SESSION['name'] ?></h3>
              </div>
              <div class="card-body">
                <p class="mb-0"><strong class="pr-1">Admin ID:</strong><?php echo $_SESSION['id'] ?></p>
                <p class="mb-0"><strong class="pr-1">Possition: </strong><?php echo $_SESSION['role'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-5 text-center ">
            <div class="card shadow-sm">
              <div class="card-header bg-transparent border-0">
                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
              </div>
              <div class="card-body pt-0">
                <table class="table table-bordered">
                  <tr>
                    <th width="30%">Email</th>
                    <td><?php echo $_SESSION['email'] ?></td>
                  </tr>
                  <tr>
                    <th width="30%">Phone Number </th>
                    <td><?php echo $_SESSION['phone_number'] ?></td>
                  </tr>


                </table>
              </div>
            </div>
            <div></div>
            <div class="card shadow-l mt-2 text-center" style="height: 250px; ">
              <div class="card-header bg-transparent border-0">
                <h3 class="mb-0 "><i class="far fa-clone pr-1"></i>About</h3>
              </div>
              <div class="card-body pt-2">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  <br>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  <br>
                  please check my Social Media:
                  <br>
                  <a>Linkedin</a>
                  <br>
                  <a>Github</a>
                  <br>
                  <a>Facebook</a>
                </p>
              </div>
            </div>
          </div>
        </div>


      <!-- </div> -->
    <!-- </div> -->

  </div>
</div>
<?php
include '../footer.php';
?>