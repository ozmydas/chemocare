<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>FormWizard_v5</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="colorlib.com">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="{{url('css/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="{{url('css/css/style.css')}}">
</head>

<body>
	<div class="wrapper">
		<div class="image-holder">
			<img src="{{url('css/images/form-wizard.png')}}" alt="">
		</div>
		<form action="">
			<div id="wizard">
				<!-- SECTION 1 -->
				<h4></h4>
				<section>
					<div class="form-row">
						<label for="">
							Nama Lengkap *
						</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-row">
						<label for="">
							Umur *
						</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-row">
						<label for="">
							Jenis Kelamin *
						</label>
						<div class="form-holder">
							<select name="" id="" class="form-control">
								<option value="pria" class="option">Pria</option>
								<option value="wanita" class="option">Wanita</option>
							</select>
							<i class="zmdi zmdi-caret-down"></i>
						</div>
					</div>

					<div class="form-row">
						<label for="">
							Alamat *
						</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-row">
						<label for="">
							Nomor Hp *
						</label>
						<input type="text" class="form-control">
					</div>
				</section>

				<!-- SECTION 2 -->
				<h4></h4>
				<section>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label" for="flexCheckDefault">
							Payudara
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
						<label class="form-check-label" for="flexCheckDefault">
							Serviks
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
						<label class="form-check-label" for="flexCheckDefault">
							Usus
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
						<label class="form-check-label" for="flexCheckDefault">
							Kanker Darah
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
						<label class="form-check-label" for="flexCheckDefault">
							Lainnya
						</label>
					</div>
					
				</section>

				<!-- SECTION 3 -->
				<h4></h4>
				<section>
					<div class="product">
						<div class="item">
							<div class="left">
								<a href="#" class="thumb">
									<img src="{{url('css/images/item-1.png')}}" alt="">
								</a>
								<div class="purchase">
									<h6>
										<a href="#">Low Table/Stool</a>
									</h6>
									<span>x4</span>
								</div>
							</div>
							<span class="price">$29</span>
						</div>
						<div class="item">
							<div class="left">
								<a href="#" class="thumb">
									<img src="{{url('css/images/item-2.png')}}" alt="">
								</a>
								<div class="purchase">
									<h6>
										<a href="#">Set of 3 Porcelain</a>
									</h6>
									<span>x2</span>
								</div>
							</div>
							<span class="price">$124</span>
						</div>
					</div>
					<div class="checkout">
						<div class="subtotal">
							<span class="heading">Subtotal</span>
							<span>$364</span>
						</div>
						<p class="shipping">
							<span class="heading">Shipping</span>
							there are no shipping methods available. please double check your address, or contact us if you need any help.
						</p>
						<div class="total">
							<span class="heading">Subtotal</span>
							<span class="total-price">$364</span>
						</div>
					</div>
				</section>

				<!-- SECTION 4 -->
				<h4></h4>
				<section>
					<div class="checkbox-circle">
						<label class="active">
							<input type="radio" name="billing method" value="Direct bank transfer" checked>Direct bank transfer>
							<span class="checkmark"></span>
							<div class="tooltip">
								Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
							</div>
						</label>
						<label>
							<input type="radio" name="billing method" value="Check payments">Check payments
							<span class="checkmark"></span>
							<div class="tooltip">
								Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
							</div>
						</label>
						<label>
							<input type="radio" name="billing method" value="Cash on delivery">Cash on delivery
							<span class="checkmark"></span>
							<div class="tooltip">
								Pay with cash upon delivery.
							</div>
						</label>
					</div>
				</section>
			</div>
		</form>
	</div>

	<script src="{{url('css/js/jquery-3.3.1.min.js')}}"></script>

	<!-- JQUERY STEP -->
	<script src="{{url('css/js/jquery.steps.js')}}"></script>

	<script src="{{url('css/js/main.js')}}"></script>
	<!-- Template created and distributed by Colorlib -->
</body>

</html>