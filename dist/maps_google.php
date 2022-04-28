<?php include ('header.php'); ?>
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-3">

                            <div class="d-flex align-items-center mt-lg-5 mb-4">
                                <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                                <div class="ms-3">
                                    <div class="fw-bold">Pontus Blume</div>
                                    <div class="text-muted">Maps, Geodata</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <!-- Post content-->
                            <article>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h1 class="fw-bolder mb-1">Google Maps</h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2">April 20, 2022</div>
                                    <!-- Post categories-->
                                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Maps</a>
                                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Free API</a>
                                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Google</a>
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4"><div class="col-lg-6 col-xl-7"><img class="img-fluid rounded" src="https://cdn.dribbble.com/users/2747141/screenshots/10583215/daily_ui_005_4x.png" alt="..." /></figure>
                                <!-- Post content-->
                                <section class="mb-5">

                                    <p class="fs-5 mb-4">In order to use APIs developed by Google, you first need to register for <a href="https://console.cloud.google.com/getting-started">Google Cloud Platform</a>.</p>
                                    <p class="fs-5 mb-4">Next, you need to enable the Google Maps API for your account <a href="https://console.cloud.google.com/apis/library/maps-embed-backend.googleapis.com?project=genuine-plate-347810">here</a>.</p>
                                    <p class="fs-5 mb-4">The next step is to generate an API key. This is done by pressing "Create Credentials" on this <a href="https://console.cloud.google.com/google/maps-apis/credentials?project=genuine-plate-347810">page</a>.</p>
                                    <h2 class="fw-bolder mb-4 mt-5">Implementing the API</h2>
                                    <p class="fs-5 mb-4">In order to embed the API into your webpage, the easiest way is to implement an iFrame into your HTML code. Below is a template that you can copy.</p>
                                    <p class="fs-5 mb-4"><xmp><iframe
  width="850"
  height="450"
  frameborder="0" style="border:0"
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&Resecentrum,Uppsala+Sweden"
  allowfullscreen>
</iframe></xmp></p>
<p class="fs-5 mb-4">This will result in the example displayed below. Be advised that you need to replace "YOUR_API_KEY" with the key generated in the previous step as well as that you can change the default location by changing "Resecentrum,Uppsala+Sweden" to a location of your preference.</p>
                                    <iframe  width="850"  height="450"  frameborder="0" style="border:0"  referrerpolicy="no-referrer-when-downgrade"src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDUhlGZS9v_75BL89nQuJNgQUd4psCU9UA&q=Resecentrum,Uppsala+Sweden" allowfullscreen></iframe>
                                </section>
                            </article>
                            <!-- Comments section-->
                            <section id="app">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="comment">
        <p v-for="items in item" v-text="items"></p>
          </div><!--End Comment-->
          </div><!--End col -->
          </div><!-- End row -->
      <div class="row">
        <div class="col-6">
      <textarea type="text" class="input" placeholder="Write a comment" v-model="newItem" @keyup.enter="addItem()"></textarea>
          <button v-on:click="addItem()" class='primaryContained float-right' type="submit">Add Comment</button>
        </div><!-- End col -->
      </div><!--End Row -->
    </div><!--End Container -->
  </section><!-- end App -->
                            <section>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <!-- Comment form-->
                                        <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                                        <!-- Comment with nested comments-->
                                        <div class="d-flex mb-4">
                                            <!-- Parent comment-->
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                Wow, this is great!
                                                <!-- Child comment 1-->
                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                                    <div class="ms-3">
                                                        <div class="fw-bold">Commenter Name</div>
                                                        I never had such an easy time implementing an API!!!
                                                    </div>
                                                </div>
                                                <!-- Child comment 2-->
                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                                    <div class="ms-3">
                                                        <div class="fw-bold">Commenter Name</div>
                                                        Wow!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single comment-->
                                        <div class="d-flex">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                So much easier than RapidAPI(?)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2022</div></div>
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
