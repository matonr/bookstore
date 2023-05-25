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
      echo '</section>';
    }
    else{
        header("Location:access_denied.php");
    }

    ?>
<?php
    include('partials/footer.php');
  ?>