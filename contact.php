<?php
    include('partials/header.php');
  ?>
            
            <div class="tm-main-content">
                <section class="row tm-margin-b-l">
                    <div class="col-12">
                        <h2 class="tm-blue-text tm-margin-b-p">Contact Us</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-md-0 mb-5 tm-overflow-auto">         
                        <div class="mr-lg-5">
                            <!-- contact form -->
                            <form action="#" method="post" class="tm-contact-form">
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group">                                                        
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="tm-btn tm-btn-blue float-right">Submit</button>
                            </form>                          
                        </div>                                       
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="tm-margin-b-p">Morbi auctor euismod dictum. Morbi eu nibh in nulla interdum placerat. Donec pellentesque est at sem aliquam hendrerit.</p>
                        <address>
                            <span class="tm-blue-text">Mailing Address</span><br>
                            1126 Aenean ac mauris at ex,<br>
                            venenatis lobortis id in 11600 <br><br>
                            <div class="tm-blue-text">          
                                Email: <a class="tm-blue-text" href="mailto:info@company.com">info@company.com</a
                                ><br>
                                Tel: <a class="tm-blue-text" href="tel:+66100200120">010-020-0120</a><br>
                                Fax: <a class="tm-blue-text" href="tel:+66900800980">090-080-0980</a><br>    
                            </div>                            
                        </address>
                        
                    </div>
                </section>

                <section class="media tm-highlight tm-highlight-w-icon">

                    <div class="tm-highlight-icon">
                        <i class="fa tm-fa-6x fa-meetup"></i>    
                    </div>                    

                    <div class="media-body">
                        <header>
                            <h2>Need Help?</h2>
                        </header>
                        <p class="tm-margin-b">Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat. Phasellus arcu leo, sagittis fringilla nisi et, pulvinar vestibulum mi. Maecenas mollis ullamcorper est at dignissim.</p>
                        <a href="" class="tm-white-bordered-btn">Live Chat</a>
                    </div>                    
                </section>
            </div>
<?php
    include('partials/footer.php');
  ?>