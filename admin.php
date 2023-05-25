<?php
    include('partials/header.php');
  ?>

<?php
    if(isset($_SESSION['token']) && $User->check_token($_SESSION['token'])){
      echo '<section>';
      echo '<h2>Books</h2>';
      echo '<form action="inc/Book/Insert.php" method="post">';
      echo   '<input type="text" class="col-3" name="name" id="name" placeholder="Name">';
      echo   '<input type="number" class="col-3" min="0" name="price" id="price" placeholder="Price">';
      echo   '<input type="text" class="col-3" name="image" id="image" placeholder="Image">';
      echo   '<input type="submit" class="col-3" value="Add" name="add_book">';
      echo   '<textarea class="col-12" rows="4" name="summary" id="summary" placeholder="Summary"></textarea>';
      echo '</form>';
      echo '<div class="tm-gallery">';
      echo '<div class="row">';

      $books = $Book->get_books();
      foreach ($books as $book){
      echo '<figure class="col-lg-3 col-md-4 col-sm-6 col-12">';
      echo        '<div class="tm-gallery-item-overlay">';
      echo            '<img src="'.$book->image.'" alt="Image" class="img-fluid tm-img-center">';
      echo        '</div>';
      echo        '<p class="tm-figcaption">'.$book->name.'</p>';
      echo '<form action="Edit_book.php" method="post">';
      echo '<button class="col-12" type = "submit" name="edit_book" value="'.$book->book_id.'">Edit</button>';
      echo '</form>';
      echo '<form action="inc/Book/Delete.php" method="post">';
      echo '<br>';
      echo '<button class="col-12" type = "submit" name="delete_book" value="'.$book->book_id.'">Delete</button>';
      echo '</form>';
      echo '</figure>';
      }
      echo '</div>';
      echo '</div>';
      echo '</section>';

      echo '<section>';
      echo '<h2>Users</h2>';
      echo '<form action="inc/User/Sign_up.php" method="post">';
      echo   '<input type="text" class="col-3" name="user_name" id="user_name" placeholder="Name">';
      echo   '<input type="email" class="col-3" min="0" name="user_email" id="user_email" placeholder="Email">';
      echo   '<input type="password" class="col-3" name="user_password" id="user_password" placeholder="Password">';
      echo   '<input type="submit" class="col-3" value="Add_user" name="sign_up">';
      echo '</form>';
      echo '<br>';
      echo '<div style="display: flex;">';
      echo '<p class="col-1">user_id</p>';
      echo '<p class="col-2">user_name</p>';
      echo '<p class="col-2">user_email</p>';
      echo '<p class="col-4">user_password</p>';
      echo '<p class="col-1">is_admin</p>';
      echo '</div>';

      $users = $User->get_users();
      foreach ($users as $user){
      echo '<form method="post">';
      echo   '<input type="text" class="col-1" name="user_id" id="user_id" placeholder="User_id" value="'.$user->user_id.'" readonly style="color: #787878;">';
      echo   '<input type="text" class="col-2" name="user_name" id="user_name" placeholder="User_name" value="'.$user->user_name.'">';
      echo   '<input type="email" class="col-2" min="0" name="user_email" id="user_email" placeholder="User_email" value="'.$user->user_email.'">';
      echo   '<input type="text" class="col-4" name="user_password" id="user_password" placeholder="User_password" value="'.$user->user_password.'">';
      echo   '<input type="hidden" name="is_admin" value="0">';
      echo   '<input type="checkbox" class="col-1" name="is_admin" id="is_admin" placeholder="Is_admin" value="1"';
      if ($user->is_admin) {
          echo ' checked="checked"';
          if ($user->token == $_SESSION['token']) {
              echo ' disabled readonly';
          }
      }
      echo '>';
      echo '<input type="submit" class="col-1" value="Save" name="edit_user" formaction="inc/User/Edit.php">';
      echo '<input type="submit" class="col-1" value="remove" name="delete_user" formaction="inc/User/Delete.php"';
      if ($user->token == $_SESSION['token']) {
        echo ' disabled readonly';
      }
      echo '>';
      echo '</form>';
      echo '<br>';
      }
      echo '</div>';
      echo '</section>';
    }
    else{
        header("Location:access_denied.php");
    }

    ?>
<?php
    include('partials/footer.php');
  ?>