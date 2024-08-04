
<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
@section('title', $title) 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 

		<!-- Page Title
		============================================= -->
		<section class="page-title bg-transparent">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1>註冊頁面</h1>
					</div>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">首頁</a></li>
							<li class="breadcrumb-item"><a href="#">會員</a></li>
							<li class="breadcrumb-item active" aria-current="page">註冊頁面</li>
						</ol>
					</nav>

				</div>
			</div>
		</section><!-- .page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div >

						<div class="form-result"></div>

						<div class="row">
							<div class="col-lg-12">
								<form action="/user/auth/signup" method="post" >
                                    @csrf
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<div class="col-12 form-group">
										<label>暱稱:</label>
										<input type="text" name="nickname" id="nickname" class="form-control required" value="" placeholder="輸入名稱">
									</div>
									<div class="col-12 form-group">
										<label>email:</label>
										<input type="email" name="email" id="email" class="form-control required" value="" placeholder="輸入帳號">
									</div>
									<div class="col-12 form-group">
										<label>密碼:</label>
										<input type="text" name="password" id="password" class="form-control required" value="" placeholder="輸入密碼">
									</div>
									<div class="col-12 form-group">
										<label>帳號類型:</label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input required" type="radio" name="type" id="type" value="G">
											<label class="form-check-label text-transform-none" for="type">一般會員</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="type" id="type" value="A">
											<label class="form-check-label text-transform-none" for="type">管理者</label>
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-secondary">Register</button>
									</div>
								</form>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->


@endsection 




