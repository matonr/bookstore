<?php
    include('partials/header.php');
  ?>

    <div class="tm-main-content">
        <section class="row tm-margin-b-l">
            <div class="col-12" style="display: flex; justify-content: center; align-items: center;">
                <h2 class="tm-blue-text tm-margin-b-p">Sign up</h2>
            </div>
            <div class="col-12" style="display: flex; justify-content: center; align-items: center;">
                <form action="inc/Sign_up/Sign_up.php" method="post" class="main_form">
                    <input type="text" name="user_name" placeholder="name"><br>
                    <input type="user_email" name="user_email" placeholder="email"><br>
                    <input type="user_password" name="user_password" placeholder="password"><br>
                    <input type="submit" value="Sign up" name="sign_up">
                </form>
            </div>
            <div class="col-12" style="display: flex; justify-content: center; align-items: center;">
                <p>Do you already have an account? <a href="login.php">Log in</a></p>
            </div>
        </section>
    </div>
    
<?php
    include('partials/footer.php');
  ?>