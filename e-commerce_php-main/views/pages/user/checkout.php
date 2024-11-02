<?php
	$title = 'Checkout';
	ob_start();
?>


	<div class="hero-wrap hero-bread" style="background-image: url('/public/user/assets/images/checkout.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Checkout</span></p>
					<h1 class="mb-0 bread">Checkout</h1>
				</div>
			</div>
		</div>
	</div>
	

	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<form action="/user/order/checkout" method="POST" class="billing-form row justify-content-center">
					<div class="col-xl-7 ftco-animate">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
							<div class="row align-items-end">
								<div class="col-md-6">
									<div class="form-group">
										<label for="firstname">Firt Name</label>
										<input type="text" class="form-control" name="first_name" value="<?= $_POST['first_name'] ?? null ?>">
										<span class="text-danger">
											<?= $_SESSION["checkout_errors"]["first_name_error"] ?? null ?>
										</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lastname">Last Name</label>
										<input type="text" class="form-control" name="last_name" value="<?= $_POST['last_name'] ?? null ?>">
										<span class="text-danger">
											<?= $_SESSION["checkout_errors"]["last_name_error"] ?? null ?>
										</span>
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="country">City</label>
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select class="form-control" name="city">
												<option selected >Select</option>
												<?php foreach($cities as $city): ?>
													<option value="<?= strtolower($city) ?>"><?= $city ?></option>
												<?php endforeach ?>
											</select>
											<span class="text-danger">
												<?= $_SESSION["checkout_errors"]["city_error"] ?? null ?>
											</span>
										</div>
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="streetaddress">Street Address</label>
										<input type="text" class="form-control" name="address" value="<?= $_POST['address'] ?? null ?>">
										<span class="text-danger">
											<?= $_SESSION["checkout_errors"]["address_error"] ?? null ?>
										</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="appartment" value="<?= $_POST['appartment'] ?? null ?>">
										<span class="text-danger">
											<?= $_SESSION["checkout_errors"]["appartment_error"] ?? null ?>
										</span>
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" name="phone" value="<?= $_POST['phone'] ?? null ?>">
										<span class="text-danger">
											<?= $_SESSION["checkout_errors"]["phone_error"] ?? null ?>
										</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="emailaddress">Email Address</label>
										<input type="text" class="form-control" name="email" value="<?= $_POST['email'] ?? null ?>">
										<span class="text-danger">
											<?= $_SESSION["checkout_errors"]["email_error"] ?? null ?>
										</span>
									</div>
								</div>
								<div class="w-100"></div>

								<div class="col-md-6">
									<input type="submit" value="Submit">
								</div>
								<!-- <div class="col-md-12">
									<div class="form-group mt-4">
										<div class="radio">
											<label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
											<label><input type="radio" name="optradio"> Ship to different address</label>
										</div>
									</div>
								</div> -->
							</div>
						<!-- END -->
					</div>
						<div class="col-xl-5">
							<div class="row mt-5 pt-3">
								<div class="col-md-12 d-flex mb-5">
									<div class="cart-detail cart-total p-3 p-md-4">
										<h3 class="billing-heading mb-4">Cart Total</h3>
										<p class="d-flex">
											<span>Subtotal</span>
											<span>JOD <?= $_SESSION["original_price"] ?? null ?></span>
										</p>
										<p class="d-flex">
											<span>Discount</span>
											<span><?= $_SESSION["coupon"][0]['discount_percentage'] ?>%</span>
										</p>


										<p class="d-flex">
											<span>Delivery</span>
											<span>JOD 3.00</span>
										</p>


										<hr>
										<p class="d-flex total-price">
											<span>Total</span>
											<span>JOD <?= $_SESSION["total_amount"] ?? null ?></span>
										</p>
									</div>
								</div>
								<!-- <div class="col-md-12">
									<div class="cart-detail p-3 p-md-4">
										<h3 class="billing-heading mb-4">Payment Method</h3>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
													<label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
													<label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
													<label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="checkbox">
													<label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary py-3 px-4">Place an order</button>
									</div>
								</div> -->
							</div>
						</div>
				</form> <!-- .col-md-8 -->
			</div>

		</div>
	</section> <!-- section -->









	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
		<div class="container py-4">
			<div class="row d-flex justify-content-center py-5">
				<div class="col-md-6">
					<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
					<span>Get e-mail updates about our latest shops and special offers</span>
				</div>
				<div class="col-md-6 d-flex align-items-center">
					<form action="#" class="subscribe-form">
						<div class="form-group d-flex">
							<input type="text" class="form-control" name="" placeholder="Enter email address">
							<input type="submit" value="Subscribe" class="submit px-3">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>




<?php
  $content = ob_get_clean();
  include './views/pages/user/layout.php';
?>

