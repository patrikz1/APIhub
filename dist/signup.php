<?php include ('header.php'); ?>
            <!-- Page content-->
   <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px; border: solid black">
          <div class="card-body p-md-1">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign Up</p>

                <form action="signup-check.php" method="post" class="mx-1 mx-md-4">

                <?php
if (@$_GET['error'] == 1):
?>
                    <div class="alert alert-danger">
                        <p>User Credentials Not set</p>
                    </div>
                    <?php
endif;
?>
                    <?php
if (@$_GET['error'] == 2):
?>
                    <div class="alert alert-danger">
                        <p>Fill all the Field</p>
                    </div>
                    <?php
endif;
?>

                    <?php
if (@$_GET['error'] == 3):
?>
                     <div class="alert alert-danger">
                            <p>Use a strong password </p>
                    </div>
                    <?php
endif;
?>

                    
                    <?php
if (@$_GET['error'] == 4):
?>
                     <div class="alert alert-danger">
                            <p>Passweord and confirm password are not same </p>
                    </div>
                    <?php
endif;
?>

                    <?php
if (@$_GET['error'] == 5):
?>
                     <div class="alert alert-danger">
                            <p>User Already Exist </p>
                    </div>
                    <?php
endif;
?>

                    <?php
if (@$_GET['error'] == 6):
?>
                     <div class="alert alert-danger">
                            <p>Signup failed </p>
                    </div>
                    <?php
endif;
?>

                    <?php
if (@$_GET['success'] == 1):
?>
                    <div class="alert alert-success">
                        <p>Your are successfully registered.</p>
                    </div>
                    <?php
endif;
?>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <?php if (isset($_GET['name'])) { ?>
                        <input type="text" id="form3Example1c" name="name" class="form-control" value="<?php echo $_GET['name']; ?> ">
                        <?php
} else { ?>
                          <input type="text" id="form3Example1c" name="name" class="form-control">
                          <?php
} ?>
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <?php if (isset($_GET['email'])) { ?>
                        <input type="email" id="form3Example1c" name="email" class="form-control" value="<?php echo $_GET['email']; ?> "> 
                        <?php
} else { ?>
                          <input type="text" id="form3Example1c" name="email" class="form-control">
                          <?php
} ?>
                      <label class="form-label" for="form3Example1c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" name="password" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" name="re_password" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>

                  

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-6 d-flex align-items-center order-1 order-lg-2">

                <img src="https://enkonix.com/api/media/User-Acceptance-Criteria_cwUvQFV_x2_webp.webp" class="img-fluid">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; APIhub 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
