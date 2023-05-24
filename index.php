<?php
    include('partials/header.php');
  ?>
            
            <div class="tm-main-content">
                <section class="tm-margin-b-l">
                    <header>
                        <h2 class="tm-main-title">Welcome to our bookstore</h2>    
                    </header>
                    
                    <p>Shelf HTML template is provided by Tooplate. Please tell your friends about it. Thank you. Images are from Unsplash website. In tincidunt metus sed justo tincidunt sollicitudin. Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat.</p>
                    
                    <div class="tm-gallery">
                        <div class="row">
                        <?php
                            $books = $Book->get_books();
                            for ($i=0;$i<count($books);$i++){
                                echo '<figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">';
                                echo    '<a href="preview.html">';
                                echo        '<div class="tm-gallery-item-overlay">';
                                echo            '<img src="'.$books[$i]->image.'" alt="Image" class="img-fluid tm-img-center">';
                                echo        '</div>';
                                echo        '<p class="tm-figcaption">'.$books[$i]->name.'</p>';
                                echo    '</a>';
                                echo '</figure>';
                                }
                        ?>       
                            
                        </div>   
                    </div>
                </section>
            </div>
<?php
    include('partials/footer.php');
  ?>