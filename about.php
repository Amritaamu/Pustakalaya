<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>ABOUT US</h3>
   <p> <a href="home.php">HOME</a> / ABOUT </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>WHY CHOOSE US?</h3>
         <p>As distributors, it was our fantasy to open a bookshop that comprehended workmanship and showed books enough to commit a whole space to the class, to make an environment as excellent, tricking, and smooth as the books it would house, and to start development with regards to the energizing a wide margin the nation was making in the plan.

In these attempting times when books are vying for your consideration, cash, and time, and when bookshops are surrendering to the extreme weight set on them, "pustaklya" has figured out how to develop to 8 looks around the nation because of you, dear readers.

We have manufactured vital associations to remove books from customary spaces, tied up with a notorious way of life stores, for example, Good Earth and Amethyst, and even extended the extension where important, and opened first blessing and gift shop.

In any case, at the center of ‘pustaklya’ is a profound love for books, particularly craftsmanship and outlined books that are storehouses of legacy, style, structure, workmanship, cooking, way of life, photography thus substantially more.
Furthermore, that is why we have ventured to the far corners of the planet and tapped our assets to convey to you the best distributors of this kind – Phaidon, Thames, Hudson, or Steidl.

As we came and saw your eagerness for the books we were loading, we were urged to extend our vision, including eccentric extras, stationery, and even furnishings (have you seen the Pantone seats?).

Today ‘pustaklya’ is synonymous with a specific tasteful and has solidly settled itself as the home of workmanship and shown books in the nation.

We presently add a virtual area to the bookstore – an online bookshop where you can purchase books. Many thanks to you for being a piece of this adventure.</p>
         
         <a href="contact.php" class="btn">CONTACT US</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">CLIENT'S REVIEWS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>This website is like a dream come true for me. I vehemently believe that reading makes you a better, stronger person. 

The best part is that the pickup is so convenient.The workers and polite and good at their job. Overall, a fabulous experience. More power to you guys!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>SURENDRA KUMAR</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>A lot of importance was given to education since my early childhood days. And being part of a well-read joint family, I was exposed to books of various genres which introduced me to a new world



Being part of this website gives me this opportunity to return to some part of my childhood.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>AMRITA KUMARI</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>This website is like a dream come true for me. I vehemently believe that reading makes you a better, stronger person. 

The best part is that the pickup is so convenient.The workers and polite and good at their job. Overall, a fabulous experience. More power to you guys!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>NITISH KUMAR</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>This website is like a dream come true for me. I vehemently believe that reading makes you a better, stronger person. 

The best part is that the pickup is so convenient.The workers and polite and good at their job. Overall, a fabulous experience. More power to you guys!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>SHREYA KUMARI</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>This website is like a dream come true for me. I vehemently believe that reading makes you a better, stronger person. 

The best part is that the pickup is so convenient.The workers and polite and good at their job. Overall, a fabulous experience. More power to you guys!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>SAGAR KUMAR</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>This website is like a dream come true for me. I vehemently believe that reading makes you a better, stronger person. 

The best part is that the pickup is so convenient.The workers and polite and good at their job. Overall, a fabulous experience. More power to you guys!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>SHAKSHI KUMARI</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">GREAT AUTHORS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>JOHN DEO</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3> Jane Austen </h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>JOY</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Louisa May Alcott</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>STUART</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Mary Shelley</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>