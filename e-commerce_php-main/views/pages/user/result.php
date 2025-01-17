<?php
	$title = 'User Cart';
	ob_start();

?>


  <div class="hero-wrap hero-bread" style="background-image: url(/public/user/assets/images/result.jpg);">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Products</span></p>
          <h1 class="mb-0 bread"><?= $_GET["search"] ?? "There are no search results" ?></h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
    <div class="container">

      <div class="row">

        <?php foreach($results as $result): ?>

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="/product?product_id=<?= $result["id"] ?>" class="img-prod"><img class="img-fluid" src="<?= ltrim($result["first_image"], ".") ?>" alt="Colorlib Template">
                <span class="status">30%</span>
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#"><?= $result["name"] ?></a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="mr-2 price-dc"><?= $result["price"] ?></span><span class="price-sale">$80.00</span></p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                      <span><i class="ion-ios-cart"></i></span>
                    </a>

                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                      <span><i class="ion-ios-heart"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach ?>

      </div>
      <!-- <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div> -->
    </div>
  </section>






<?php
  $content = ob_get_clean();
  include './views/pages/user/layout.php';
?>