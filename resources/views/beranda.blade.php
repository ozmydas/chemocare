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
		<form action="{{url('/tambah')}}" id="myformku" method="post">
		{{ csrf_field() }}
			<div id="wizard">
				<!-- SECTION 1 -->
				<h4></h4>
				<section>
					<div class="form-row">
						<label for="">
							Nama Lengkap *
						</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-row">
						<label for="">
							Umur *
						</label>
						<input type="text" name="age" class="form-control">
					</div>
					<div class="form-row">
						<label for="">
							Jenis Kelamin *
						</label>
						<div class="form-holder">
							<select name="gender" id="" class="form-control">
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
						<input type="text" name="address" class="form-control">
					</div>
					<div class="form-row">
						<label for="">
							Nomor Hp *
						</label>
						<input type="text" name="phone" class="form-control">
					</div>
				</section>

				<!-- SECTION 2 -->
				<h4></h4>
				<section>
				@foreach($jeniscancer as $jc)
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name ="cancer_name[]" value="{{ $jc->name }}" id="cancer_{{ $jc->id }}">
						<label class="form-check-label" for="cancer_{{ $jc->id }}">
						{{ $jc->name }}
						</label>
					</div>
					@endforeach

					<input type="text" name="cancer_name" class="form-control" placeholder="Kanker Lainnya isi di kolom ini">

				
				</section>

				<!--SECTION 3-->
				<h4></h4>
				<section>
				<div class="form-holder">
							<select name="cancer_stadium" id="" class="form-control">
								<option value="1" class="option">1</option>
								<option value="2" class="option">2</option>
								<option value="3" class="option">3</option>
								<option value="4" class="option">4</option>
							</select>
							<i class="zmdi zmdi-caret-down"></i>
					</div>
				</section>

				<!--SECTION 4 
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
				</section> -->
			</div>
		</form>
	</div>

	<script src="{{url('css/js/jquery-3.3.1.min.js')}}"></script>

	<!-- JQUERY STEP -->
	<script src="{{url('css/js/jquery.steps.js')}}"></script>

	<script src="{{url('css/js/main.js?87')}}"></script>
	<!-- Template created and distributed by Colorlib -->
</body>

</html>

<script>

	$('[href="#finish"]').click(()=>{
		alert("ggggggggggg");
	})
</script>