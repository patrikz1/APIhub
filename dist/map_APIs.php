<?php include ('header.php'); ?>
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5">
                    <h1 class="fw-bolder fs-5 mb-4">Map APIs</h1>
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row gx-0">
                                <div class="col-lg-6 col-xl-5 py-lg-5">
                                    <div class="p-4 p-md-5">
                                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Maps</div>
                                        <div class="h2 fw-bolder">Google Maps</div>
                                        <p>Create real-world, real-time experiences with the latest Maps, Routes, and Places features from Google Maps Platform. Built by the Google team for developers everywhere. </p>
                                        <a class="stretched-link text-decoration-none" href="maps_google.php">
                                            Read more
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('https://cdn.dribbble.com/users/2747141/screenshots/10583215/daily_ui_005_4x.png')"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                       <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5">
                    <h2 class="fw-bolder fs-5 mb-4"></h2>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://assets-global.website-files.com/6050a76fa6a633d5d54ae714/6086da08c7b29d825e7f4d2e_navigation-tablet(home).png" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Maps</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Mapbox</h5></a>
                     
                                                              
                            <?php
if (@$_SESSION['type'] == "Pro"):
?>

                                    <h6><a class="stretched-link text-decoration-none" href="rate.php">Reviews </a></h6>

                                    
                                    <?php
elseif (@$_SESSION['type'] == "Basic"):
?>
                                    <h6><a class="stretched-link text-decoration-none" href="free_users.php">Reviews </a></h6>

                              <?php
endif;
?>
                                    <p class="card-text mb-0">Mapbox is a developer-friendly mapping and location cloud platform. Mapbox provides the SDKs and APIs that enable developers and designers to incorporate real-time location awareness into their projects.</p>
                                    <a class="text-decoration-none" href="https://docs.mapbox.com/api/overview/">
                                        Read more
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://storage.googleapis.com/gweb-cloudblog-publish/original_images/Dashboard-01.png" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Maps</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Google Maps GeoCoding</h5></a>
                                    
                                    <?php
if (@$_SESSION['type'] == "Pro"):
?>

<h6><a class="stretched-link text-decoration-none" href="rate_google_geocoding.php">Reviews </a></h6>

                                    
                                    <?php
elseif (@$_SESSION['type'] == "Basic"):
?>
                                    <h6><a class="stretched-link text-decoration-none" href="free_users.php">Reviews </a></h6>

                              <?php
endif;
?>
                                    
                                    
                                  
                                    <p class="card-text mb-0">Geocoding is the process of converting addresses (such as "1600 Amphitheatre Parkway, Mountain View, CA") into geographic coordinates (such as latitude 37.423021 and longitude -122.083739), which can be used to place markers on a map.</p>
                                    <a class=" text-decoration-none" href="https://developers.google.com/maps/documentation/geocoding/overview">
                                        Read more
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://www.yelpblog.com/wp-content/uploads/2015/01/6a00d83452b44469e201bb07da5ac9970d.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Maps</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Yelp</h5></a>
                              
                                    <?php
if (@$_SESSION['type'] == "Pro"):
?>

<h6><a class="stretched-link text-decoration-none" href="rate_google_yelp.php">Reviews </a></h6>

                                    
                                    <?php
elseif (@$_SESSION['type'] == "Basic"):
?>
                                    <h6><a class="stretched-link text-decoration-none" href="free_users.php">Reviews </a></h6>

                              <?php
endif;
?>

                              
                              
                                    <p class="card-text mb-0">You can obtain review data sorted geographically and filter by ratings and distance from a location using the Yelp API. This information can help you better up your local marketing efforts.</p>
                                    <a class="text-decoration-none" href="https://www.yelp.com/developers">
                                        Read more
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mb-5 mb-xl-0">
                        <a class="text-decoration-none" href="#!">
                            More stories
                            <i class="bi bi-arrow-right"></i>
                        </a>
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
    </body>
</html>
