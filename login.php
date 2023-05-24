<?php
    include('partials/header.php');
  ?>

    <div class="tm-main-content">
        <section class="row tm-margin-b-l">
            <div class="col-12" style="display: flex; justify-content: center; align-items: center;">
                <h2 class="tm-blue-text tm-margin-b-p">Log in</h2>
            </div>
            <div class="col-12" style="display: flex; justify-content: center; align-items: center;">
                <form action="inc/Login/Login.php" method="post" class="main_form">
                    <input type="email" name="user_email" placeholder="email"><br>
                    <input type="password" name="user_password" placeholder="password"><br>
                    <input type="submit" value="login" name="log_in">
                </form>
            </div>
            <div class="col-12" style="display: flex; justify-content: center; align-items: center;">
                <p>Don’t have an account? <a href="sign_up.php">Sing up</a></p>
            </div>
        </section>
    </div>

<?php
    include('partials/footer.php');
  ?>