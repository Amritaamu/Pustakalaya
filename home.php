<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOME</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Hand Picked Book to your door.</h3>
      <p>ENSURING EVRYONE LEARN , READ AND GROW</p>
      <a href="about.php" class="white-btn">DISCOVER MORE</a>
   </div>

</section>

<section class="products">

   <h1 class="title">LATEST PRODUCTS</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">₹<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">LOAD MORE</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>ABOUT US</h3>
         <p>As distributors, it was our fantasy to open a bookshop that comprehended workmanship and showed books enough to commit a whole space to the class, to make an environment as excellent, tricking, and smooth as the books it would house, and to start development with regards to the energizing a wide margin the nation was making in the plan.

In these attempting times when books are vying for your consideration, cash, and time, and when bookshops are surrendering to the extreme weight set on them, "pustaklya" has figured out how to develop to 8 looks around the nation because of you, dear readers.

We have manufactured vital associations to remove books from customary spaces, tied up with a notorious way of life stores, for example, Good Earth and Amethyst, and even extended the extension where important, and opened first blessing and gift shop.

In any case, at the center of ‘pustakalya’ is a profound love for books, particularly craftsmanship and outlined books that are storehouses of legacy, style, structure, workmanship, cooking, way of life, photography thus substantially more.
Furthermore, that is why we have ventured to the far corners of the planet and tapped our assets to convey to you the best distributors of this kind – Phaidon, Thames, Hudson, or Steidl.

As we came and saw your eagerness for the books we were loading, we were urged to extend our vision, including eccentric extras, stationery, and even furnishings (have you seen the Pantone seats?).

Today ‘pustakalya’ is synonymous with a specific tasteful and has solidly settled itself as the home of workmanship and shown books in the nation.

We presently add a virtual area to the bookstore – an online bookshop where you can purchase books. Many thanks to you for being a piece of this adventure.


</p>
         <a href="about.php" class="btn">READ MORE</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>Have Any Questions?</h3>
      
      <a href="contact.php" class="white-btn">CONTACT US</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>