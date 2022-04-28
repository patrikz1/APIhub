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
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
    
                        <form action="login_action.php" method="post">

                        <?php
if (@$_GET['error'] == 1):
?>
                    <div class="alert alert-danger">
                        <p>Email is required</p>
                    </div>
                    <?php
endif;
?>
                    <?php
if (@$_GET['error'] == 2):
?>
                    <div class="alert alert-danger">
                        <p>Password is required</p>
                    </div>
                    <?php
endif;
?>

                    <?php
if (@$_GET['error'] == 3):
?>
                     <div class="alert alert-danger">
                            <p>Your Email/Password is Incorrect </p>
                    </div>
                    <?php
endif;
?>

                    
                    <?php
if (@$_GET['error'] == 4):
?>
                     <div class="alert alert-danger">
                            <p>Your Email/Password is Incorrect </p>
                    </div>
                    <?php
endif;
?>


                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input name="email" type="email" id="form1Example13" class="form-control form-control-lg" />
                                    <label class="form-label" for="form1Example13">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password"  name="password" id="form1Example23" class="form-control form-control-lg" />
                                    <label class="form-label" for="form1Example23">Password</label>
                                </div>

               <input type="radio" name="type" value="Basic" checked required>
              <span class="from-control mb-4">Basic</span>
              
              <input type="radio" name="type" value="Pro" required>
              <span class="from-control mb-4">Pro</span> <br>
              </br>
              
                                <div class="d-flex justify-content-around align-items-center mb-4">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                                    </div>
                                    <a href="signup.php">Create new account</a>
                                    <a href="forgot-password.php">Forgot password?</a>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
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
       
          <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/jquery.js"></script>

   
<script>
        jQuery(document).ready(function(){
            jQuery('.pro').hide();
            jQuery('input[name=type]').change(function(){
                debugger;
                var type = jQuery(this).val();
                if(type=='Pro'){
                    jQuery('.pro').show();
                }
                else{
                    jQuery('.pro').hide();
                }
            });
        });
    </script>
   
   
      </body>
</html>
