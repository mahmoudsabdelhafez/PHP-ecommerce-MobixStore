<?php
  if (!isset($_SESSION['user'])) {
      header("Location: /login");
      exit;
  }



// session_start();
require "./model/Wishlist.php";


class WishlistController {

  private $wishlist;

  function __construct()
  {
    $this->wishlist = new Wishlist();
  }


  function addToWishlist($product_id) {

    $user_id = $_SESSION["user"]['user_id']; // Get user ID from session
    // $product_id = $_POST['product_id']; // Get product ID from POST
    $existing = $this->wishlist->where("SELECT * FROM wishlists WHERE user_id='$user_id' AND product_id=$product_id");

    if (empty($existing)) {
      // Add the product to the wishlist
      $this->wishlist->create([
          'user_id' => $user_id,
          'product_id' => $product_id
        ]);
    }
  }


  function getWishlist() {

      $query = "SELECT p.*, w.id AS wishlist_id, pi.path AS first_image
        FROM products p
        JOIN wishlists w ON p.id = w.product_id
        JOIN product_images pi ON pi.products_id = p.id
        WHERE w.user_id = " . $_SESSION['user']['user_id'] . "
        GROUP BY p.id
        ORDER BY pi.created_at ASC";

      return $this->wishlist->where($query);
  }



  public function delete($pk){
    $this->wishlist->delete($pk);
  }
}

// $wishlist = new Wishlist(); 