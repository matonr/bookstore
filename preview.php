<?php
    include('partials/header.php');
  ?>
            
            <div class="tm-main-content no-pad-b">
                    
                <section class="row tm-item-preview">
                    <div class="col-md-6 col-sm-12 mb-md-0 mb-5">
                        <img src="img/image-05-preview.jpg" alt="Image" class="img-fluid tm-img-center-sm">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h2 class="tm-blue-text tm-margin-b-p">Mauris cursus turpis</h2>
                        <p class="tm-margin-b-p">Suspendisse suscipit tortor eu nunc fermentum pellentesque. Donec vaius diam ut velit porttitor accumsan. Cras ac porttitor urna, in vehicula diam. Ut ultricies leo dapibus, facilisis justo vel, dignissim tortor.</p>
                        <p class="tm-margin-b-p">Ut iaculis vel libero a auctor. Integer arcu orci, vaius id velit sed, lacinia venenatis felis. Integer in facilisis tortor. Vivamus facilisis mattis finibus. Vestibulum in aliquam nisl. Nunc pretium elementum posuere.</p>
                        <p class="tm-margin-b-p">Nunc vulputate placerat pulvinar. Integer ornare, enim et vestibulum mattis, dolor lacus congue sapien, eget tempor sapien est ut mauris.</p>
                        <p class="tm-blue-text tm-margin-b-s">Categories: <a href="#" class="tm-blue-text">New Story</a>, <a href="#" class="tm-blue-text">Epic</a>, <a href="#" class="tm-blue-text">Popular</a></p>
                        <p class="tm-blue-text tm-margin-b-s">Views: 10,890</p>
                        <p class="tm-blue-text tm-margin-b">Rating: <img src="img/star.png" alt="Star image"> <img src="img/star.png" alt="Star image"> <img src="img/star.png" alt="Star image"> <img src="img/star.png" alt="Star image"></p>
                        <a href="#" class="tm-btn tm-btn-gray tm-margin-r-20 tm-margin-b-s">Preview</a><a href="#" class="tm-btn tm-btn-blue">Download</a>
                    </div>
                </section>

                <div class="tm-gallery no-pad-b">
                    <div class="row">
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.html">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-06.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Suspendisse suscipit</p>
                            </a>
                        </figure>
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.html">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-03.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Cras non augue</p>
                            </a>
                        </figure>
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.html">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-08.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Vivamus facilisis</p>
                            </a>
                        </figure> 
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.html">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-05.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Quisque velit</p>
                            </a>
                        </figure>
                    </div>   
                </div>                    
                            
            </div>

            <footer>
                Copyright &copy; <span class="tm-current-year">2018</span> Shelf Company 
                
                - Designed by <a href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a>
            </footer>    
        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
        <script>     
       
            $(document).ready(function(){
                
                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());

            });

        </script>             

</body>
</html>