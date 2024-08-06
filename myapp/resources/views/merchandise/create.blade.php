
@extends('layout.master')

@section('content')
<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="container">

			<div class="accordion accordion-lg mx-auto mb-0" style="max-width: 550px;">

				<div class="accordion-header">
					<div class="accordion-icon">
						<i class="accordion-open bi-unlock"></i>
					</div>
					<div class="accordion-title">
						新增商品
					</div>
				</div>
				<div>
					@include('components.errorMessage')
					<form class="row mb-0" action="/user/auth/login" method="post">
						@csrf
						<div class="col-12 form-group">
							<label for="login-form-username">Email:</label>
							<input type="text" id="email" name="email" value="" class="form-control">
						</div>

						<div class="col-12 form-group">
							<label for="login-form-password">Password:</label>
							<input type="password" id="password" name="password" value="" class="form-control">
						</div>

						<div class="col-12 form-group">
							<div class="d-flex justify-content-between">
								<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
								<a href="#">Forgot Password?</a>
							</div>
						</div>
					</form>
				</div>


			</div>

		</div>
	</div>
</section><!-- #content end -->

@endsection