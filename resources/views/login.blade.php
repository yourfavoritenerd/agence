<!DOCTYPE html>

<html lang="PT">
	<!--begin::Head-->
<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!--Begin::Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= '//www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
		<!--End::Google Tag Manager -->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--Begin::Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!--End::Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/metronic8/demo1/assets/media/illustrations/sketchy-1/14.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="/index.html" class="mb-12">
						<img alt="Logo" src="/assets/media/logos/logo-1.svg" class="h-40px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100"  method="post" action="{{ route('login.perform') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Login</h1>
								<!--end::Title-->
                                @include('layouts.partials.messages')
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark">Email / Utilizador</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="text" name="username" value="{{ old('username') }}" autocomplete="off" />
								<!--end::Input-->
                                @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Palavra-passe</label>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="password" name="password" value="{{ old('password') }}" autocomplete="off" />
								<!--begin::Option-->
								
								<!--end::Input-->
                                @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                 @endif
							</div>
							<label class="form-check form-check-inline form-check-solid me-5" style="margin-bottom:30px">
								<input class="form-check-input" name="remember" type="checkbox" value="1" />
								<span class="fw-bold ps-2 fs-6">Manter sessão iniciada</span>
							</label>
							<!--end::Option-->
							<!--end::Input group-->
							
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Entrar</span>
									<span class="indicator-progress">Processando... 
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
                                @include('layouts.partials.copy')
								<!--end::Submit button-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="https://keenthemes.com/" class="text-muted text-hover-primary px-2">About</a>
						<a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
						<a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "/assets/index.html";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="/assets/js/custom/authentication/sign-in/general.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/authentication/layouts/basic/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Feb 2022 07:51:28 GMT -->
</html>