<?php
    include('partials/header.php');
  ?>

<?php
    if(isset($_SESSION['token']) && $User->check_token($_SESSION['token'])){
      $book_id = '';
      $name = '';
      $price = '';
      $image = '';
      $summary = '';
      if(isset($_POST['edit_book'])){
          $book_id = $_POST['edit_book'];
          $name = $Book->get_book_value("name", $book_id, );
          $price = $Book->get_book_value("price", $book_id);
          $image = $Book->get_book_value("image", $book_id);
          $summary = $Book->get_book_value("summary", $book_id);
      }
      echo '<section>';
      echo '<h2>Books</h2>';
      echo '<form action="inc/Book/Edit.php" method="post">';
      echo   '<input type="text" class="col-3" name="book_id" id="book_id" placeholder="Book_id" value="'.$book_id.'">';
      echo   '<input type="text" class="col-3" name="name" id="name" placeholder="Name" value="'.$name.'">';
      echo   '<input type="number" class="col-3" min="0" name="price" id="price" placeholder="Price" value="'.$price.'">';
      echo   '<input type="text" class="col-3" name="image" id="image" placeholder="Image" value="'.$image.'">';
      echo   '<textarea class="col-12" rows="4" name="summary" id="summary" placeholder="Summary" value="'.$summary.'"></textarea>';
      echo   '<input type="submit" class="col-12" value="Save" name="edit_book">';
      echo '</form>';
      echo '<br>';
      echo '</section>';
    }
    else{
        header("Location:access_denied.php");
    }

    ?>
<?php
    include('partials/footer.php');
  ?>