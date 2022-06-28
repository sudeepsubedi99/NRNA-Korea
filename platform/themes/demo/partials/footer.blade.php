<footer>
    <div class="footer-content">
        <div class="container">
            <section class="footer-sec">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="f-logo mb-4">
                            <a href="#">
                                <img src="{{ url('storage/images/f-logo.png')}}" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-info text-white pr-4">
                            <h3><strong>NCC South Korea</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis dignissim libero velit
                                mauris
                                felis. Risus, proin iaculis interdum sit congue scelerisque ut in.</p>
                            <ul class="f-contact my-4">
                                <li><a href="tel:+1 23 456 7890"><i class="bi bi-telephone-fill"></i> +1 23 456 7890</a>
                                </li>
                                <li><i class="bi bi-geo-alt-fill"></i> Euismod voluAddtpat, scelerisque</li>
                            </ul>
                            <ul class="f-social d-flex">
                                <li><a href="#" target="_blank"><i class="bi bi-facebook"></i></a> </li>
                                <li><a href="#" target="_blank"><i class="bi bi-instagram"></i></a> </li>
                                <li><a href="#" target="_blank"><i class="bi bi-twitter"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-info quick-links px-4">
                            <h3>About NRNA South Korea</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Media</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Event</a></li>
                                <li><a href="#">Projects</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-info f-newsletter pl-4">
                            <h3>Join our Newsletter</h3>
                            <form>
                                <div class="form-group">
                                    <input type="text" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <button class="bg-white">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="copy-right bg-blue">
        <div class="container">
            <div class="text-white text-center">
                <p class="mb-0 p-3"> {!! Theme::footer('demo') !!} </p>
            </div>
        </div>
    </div>
    <div id="btn-scrollup">
        <a title="Go Top" class="scrollup button-circle" href="#"><i class="bi bi-chevron-up"></i></a>
    </div>
</footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="{{ asset('themes/demo/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/demo/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/demo/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/demo/js/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/demo/js/scripts.js') }}"></script>

</body>

</html>
