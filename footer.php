<!-- footer section -->
<!-- Footer Section Begin -->
<section class="footer-section">
    <footer class="footer">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="">
                    <div class="footer__about">
                            <!-- Logo -->
                            <div class="navbar-brand">
                                <a class="logo" href="index.html">
                                    <img src="assets/image/Group 2217.png" alt="logo">
                                </a>
                            </div>
                            <!-- /Logo -->
                    </div>
                    <div>
                        <p>
                            Elewayte provides valuable internship training in fields<br> like Python, Machine Learning, Web Development, <br>Digital Marketing, Artificial Intelligence,<br> Software Training, and Web Designing
                        </p>
                    </div><br>
                    <div class="d-inline">
                        <a href=" https://www.facebook.com/Elewaytecom-101373925199375"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/company/71002612/admin/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/elewayte_/"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>     
                </div>
                <div class="">
                    <div class="footer__widget">
                        <h5>Elewayte</h5>
                        <ul>
                            <li><a href="#">Career</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="blog.php">Blogs</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="">
                    <div class="footer__widget">
                        <h5>Community</h5>
                       <ul>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="#">Check Your Certificate</a></li>
                            <li><a href="#">Workshop/Webiner</a></li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <div class="footer__widget">
                        <h5>Need Help?</h5>
                       <ul>
                            <li><a href="mailto:info@elewayte.com">info@elewayte.com</a></li>
                            <li><a href="tel:9790840599">9790840599</a></li>
                            <li >
                                <address>60, First Floor,<br> Industrial Estate, Perungudi, <br>Chennai, Tamil Nadu<br> 600100</address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!-- footer-copy-section -->
<section class="footer-copy-section ">
    <div class="container">
            <div class="footer__copyright__text d-flex flex-wrap justify-content-between mt-2">
                <div class="" >
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                   <a href=""><p>Copyright &#169;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved
                    </p></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div>
                    <a href=""><p>Privacy Policy</p></a>
                </div>
                <div class=" terms">
                    <a href=""><p>Terms of service</p></a>
                </div>
            </div>
    </div>
</section>

<!-- Footer Section End -->



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/flipster.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
      $('.autoplay').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
      });
  });
AOS.init()

    var coverflow = $("#coverflow").flipster();
        var carousel = $("#carousel").flipster({
        style: 'carousel',
        spacing: -0.5,
        nav: true,
        buttons:   true,
    });
    var wheel = $("#wheel").flipster({
        style: 'wheel',
        spacing: 0
    });
    var flat = $("#flat").flipster({
        style: 'flat',
        spacing: -0.25
    });

   
</script>

</body>
</html> 