<?php include "z_db.php";?>

  <!--====== Footer Area Start ======-->
  <footer class="section footer-area">
    <!-- Footer Top -->
    <div class="footer-top ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">About Us</h3>
                        <ul>
                            <li><a href="#">Toire@gmail.com</a></li>
                            <li><a href="#">09123456789 </a></li>
                            <li>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">Services</h3>
                        <ul>
                            <?php
                                $q="SELECT * FROM  service ORDER BY id DESC LIMIT 5";
                                $r123 = mysqli_query($con,$q);

                                while($ro = mysqli_fetch_array($r123))
                                {
                                    $id="$ro[id]";
                                    $service_title="$ro[service_title]";

                                    print "<li class='py-2'><a class='text-black-50' href='servicedetail.php?id=$id'>$service_title</a></li>";
                                }
                            ?>
                        </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">Why Toire</h3>
                        <ul>
                            <li><a href="#">Best Design</a></li>
                            <li><a href="#">Security </a></li>
                            <li><a href="#">Unique</a></li>
                            <li><a href="#">Simple</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">Learn</h3>
                        <ul>
                            <li><a href="#">What is Graphic design?</a></li>
                            <li><a href="#">What is Web Development?</a></li>
                            <li><a href="#">What is Digital Marketing?</a></li>
                            <li><a href="#">What is Trading?</a></li>
                            <li><a href="#">What is Design?</a></li>
                            <li><a href="#">What is SMM?</a></li>
                        </ul>
                    </div>
                </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                
                                <!-- Social Icons -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Copyright Area -->
                <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                    <!-- Copyright Left -->
                    <div class="copyright-left">
                        <?php print $site_footer ?>
                    </div>
                    <!-- Footer Links -->
                    <div class="footer-links d-flex justify-content-between">
                        <a href="#" class="mr-3">Terms and Privacy</a>
                        <a href="#" class="mr-3">Help</a>
                        <a href="#">Feedback</a>
                    </div>
                    <!-- Made with Love -->
                    <div class="made-with-love">
                        Made with <i class="fas fa-heart"></i> By <a href="#">Toire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        </footer>
        <!--====== Footer Area End ======-->

        <!--====== Modal Search Area Start ======-->

        <!--====== Modal Search Area End ======-->

        <!--====== Modal Responsive Menu Area Start ======-->
        <div id="menu" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Responsive Menu Area End ======-->

    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
</body>


</html>
