<!--VERSION 2 OF DRESS ME APP
  - Created By    : Arsiela
  - Created Date  : 05-15-2023
-->
<?php
include 'include/db_connection.php';
include 'include/header.php';
include 'include/navigation.php';
?>
<header class="cover-header">
  <div class="photo-container">
    <img src="./image/header_title.png" alt="Photo 2">
    <img src="./image/header_cover.png" alt="Photo 1">
  </div>

</header>

<main>
<div class="content">
  <!--Multiply Card thru for loop base on City Exist on Database -->
  <?php

  ?>
 <div class="card-container">
  <div class="card">
    <h3>Product Title</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <a href="#" class="btn">Learn More</a>
  </div>

  <div class="card">
    <h3>Product Title</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <a href="#" class="btn">Learn More</a>
  </div>
</div>

  <?php

  ?>




<section class="banner">
      <h1>Welcome to My eCommerce Store</h1>
      <p>Discover the best products at unbeatable prices.</p>
      <a href="#" class="btn">Shop Now</a>
    </section>

    <section class="featured-products">
      <h2>Featured Products</h2>
      <div class="product">
        <img src="product1.jpg" alt="Product 1">
        <h3>Product 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="btn">Add to Cart</a>
      </div>
      <div class="product">
        <img src="product2.jpg" alt="Product 2">
        <h3>Product 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="btn">Add to Cart</a>
      </div>
      <!-- Add more products here -->
    </section>

    <section class="categories">
      <h2>Shop by Category</h2>
      <div class="category">
        <img src="category1.jpg" alt="Category 1">
        <h3>Category 1</h3>
      </div>
      <div class="category">
        <img src="category2.jpg" alt="Category 2">
        <h3>Category 2</h3>
      </div>
      <!-- Add more categories here -->
    </section>

</main>


<?php
include 'include/footer.php';
?>
