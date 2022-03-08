@include('layouts.header')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Account Settings</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="../index.html" class="text-muted text-hover-primary">Home</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Account</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-dark">Settings</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Filter menu-->
				<div class="m-0">
					<!--begin::Menu toggle-->
					<a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
					<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
					<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->Filter</a>
					<!--end::Menu toggle-->
					<!--begin::Menu 1-->
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6219da0cea8fa">
						<!--begin::Header-->
						<div class="px-7 py-5">
							<div class="fs-5 text-dark fw-bolder">Filter Options</div>
						</div>
						<!--end::Header-->
						<!--begin::Menu separator-->
						<div class="separator border-gray-200"></div>
						<!--end::Menu separator-->
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Status:</label>
								<!--end::Label-->
								<!--begin::Input-->
								<div>
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6219da0cea8fa" data-allow-clear="true">
										<option></option>
										<option value="1">Approved</option>
										<option value="2">Pending</option>
										<option value="2">In Process</option>
										<option value="2">Rejected</option>
									</select>
								</div>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Member Type:</label>
								<!--end::Label-->
								<!--begin::Options-->
								<div class="d-flex">
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" value="1" />
										<span class="form-check-label">Author</span>
									</label>
									<!--end::Options-->
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="2" checked="checked" />
										<span class="form-check-label">Customer</span>
									</label>
									<!--end::Options-->
								</div>
								<!--end::Options-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Notifications:</label>
								<!--end::Label-->
								<!--begin::Switch-->
								<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
									<label class="form-check-label">Enabled</label>
								</div>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex justify-content-end">
								<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
								<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Form-->
					</div>
					<!--end::Menu 1-->
				</div>
				<!--end::Filter menu-->
				<!--begin::Secondary button-->
				<!--end::Secondary button-->
				<!--begin::Primary button-->
				<a href="../.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
				<!--end::Primary button-->
			</div>
			<!--end::Actions-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			@include('layouts.partials.messages')
			<!--begin::Basic info-->
			<div class="card mb-5 mb-xl-10">
				<!--begin::Card header-->
				<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">Utilizador</h3>
					</div>
					<!--end::Card title-->
				</div>
				<!--begin::Card header-->
				<!--begin::Content-->
				<div id="kt_account_settings_profile_details" class="collapse show">
					<!--begin::Form-->
					<form method="post" action="{{ route('users.update_user', $user->id) }}" class="form"  enctype="multipart/form-data">
						@method('patch')
						@csrf
						<!--begin::Card body-->
						<div class="card-body border-top p-9">
							<!--begin::Input group-->
							<div class="row mb-6">
								<!--begin::Label-->
								<label class="col-lg-4 col-form-label fw-bold fs-6">Foto de Perfil</label>
								<!--end::Label-->
								<!--begin::Col-->
								<div class="col-lg-8">
									<!--begin::Image input-->
									<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../assets/media/svg/avatars/blank.svg')">
										<!--begin::Preview existing avatar-->
										<div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $user->profile_photo_path }})"></div>
										<!--end::Preview existing avatar-->
										<!--begin::Label-->
										<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
											<i class="bi bi-pencil-fill fs-7"></i>
											<!--begin::Inputs-->
											<input type="file" name="profile_photo_path" accept=".png, .jpg, .jpeg" />
											
											<!--end::Inputs-->
										</label>
										<!--end::Label-->
										<!--begin::Cancel-->
										<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
											<i class="bi bi-x fs-2"></i>
										</span>
										<!--end::Cancel-->
										<!--begin::Remove-->
										<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
											<i class="bi bi-x fs-2"></i>
										</span>
										<!--end::Remove-->
									</div>
									<!--end::Image input-->
									<!--begin::Hint-->
									<div class="form-text">Formatos permitidos: png, jpg, jpeg.</div>
									<!--end::Hint-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row mb-6">
								<!--begin::Label-->
								<label class="col-lg-4 col-form-label required fw-bold fs-6">Nome</label>
								<!--end::Label-->
								<!--begin::Col-->
								<div class="col-lg-8 fv-row">
									<input type="text" name="name" class="form-control form-control-lg form-control-solid" placeholder="Nome" value="{{ $user->name }}" />
									@if ($errors->has('name'))
										<span class="text-danger text-left">{{ $errors->first('name') }}</span>
									@endif
								</div>
								<!--end::Col-->
							</div>
							<!--begin::Input group-->
							<div class="row mb-6">
								<!--begin::Label-->
								<label class="col-lg-4 col-form-label required fw-bold fs-6">Utilizador</label>
								<!--end::Label-->
								<!--begin::Col-->
								<div class="col-lg-8 fv-row">
									<input type="text" name="username" class="form-control form-control-lg form-control-solid" placeholder="Utilizador" value="{{ $user->username }}" />
									@if ($errors->has('username'))
										<span class="text-danger text-left">{{ $errors->first('username') }}</span>
									@endif
								</div>
								<!--end::Col-->
							</div>
							<!--begin::Input group-->
							<div class="row mb-6">
								<!--begin::Label-->
								<label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
								<!--end::Label-->
								<!--begin::Col-->
								<div class="col-lg-8 fv-row">
									<input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="{{ $user->email }}" />
									@if ($errors->has('email'))
										<span class="text-danger text-left">{{ $errors->first('email') }}</span>
									@endif
								</div>
								<!--end::Col-->
							</div>
						</div>
						<!--end::Card body-->
						<!--begin::Actions-->
						<div class="card-footer d-flex justify-content-end py-6 px-9">
							<a style="margin-right: 0.5rem" href="{{ route('users.list') }}" class="btn btn-secondary" role="button" aria-pressed="true">Sair</a>
							<button type="submit" class="btn btn-primary">Gravar</button>
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Basic info-->
			<!--begin::Sign-in Method-->
			<div class="card mb-5 mb-xl-10">
				<!--begin::Card header-->
				<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">Segurança</h3>
					</div>
				</div>
				<!--end::Card header-->
				<!--begin::Content-->
				<div id="kt_account_settings_signin_method" class="collapse show">
					<!--begin::Card body-->
					<div class="card-body border-top p-9">
						<!--begin::Password-->
						<div class="d-flex flex-wrap align-items-center mb-10">
							<!--begin::Edit-->
							<div id="kt_signin_password_edit" class="flex-row-fluid">
								<!--begin::Form-->
								<form method="post" action="{{ route('users.update_password', $user->id) }}" class="form" >
									@method('patch')
									@csrf
									<div class="row mb-1">
										<!--
										<div class="col-lg-4">
											<div class="fv-row mb-0">
												<label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Palavra-passe actual</label>
												<input type="password" class="form-control form-control-lg form-control-solid" name="current_password" id="currentpassword" />
												@if ($errors->has('current_password'))
													<span class="text-danger text-left">{{ $errors->first('current_password') }}</span>
												@endif
											</div>
										</div>-->
										<div class="col-lg-4">
											<div class="fv-row mb-0">
												<label for="newpassword" class="form-label fs-6 fw-bolder mb-3">Nova Palavra-passe</label>
												<input type="password" class="form-control form-control-lg form-control-solid" name="new_password" id="newpassword" />
												@if ($errors->has('new_password'))
													<span class="text-danger text-left">{{ $errors->first('new_password') }}</span>
												@endif
											</div>
										</div>
										<div class="col-lg-4">
											<div class="fv-row mb-0">
												<label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Repetir nova palavra-passe</label>
												<input type="password" class="form-control form-control-lg form-control-solid" name="new_confirm_password" id="confirmpassword" />
												@if ($errors->has('new_confirm_password'))
													<span class="text-danger text-left">{{ $errors->first('new_confirm_password') }}</span>
												@endif
											</div>
										</div>
										<div class="form-text mb-5">A palavra-passe deve ter pelo menos 8 caracteres.</div>
									</div>									
								</form>
								<!--end::Form-->
							</div>
							<!--end::Edit-->
							
						</div>
						<!--end::Password-->
						
					</div>
					<!--end::Card body-->
					<div class="card-footer d-flex justify-content-end py-6 px-9">
						<a style="margin-right: 0.5rem" href="{{ route('users.list') }}" class="btn btn-secondary" role="button" aria-pressed="true">Sair</a>
						<button  type="submit" class="btn btn-primary me-2 px-6">Gravar</button>
					</div>
				</div>
				<!--end::Content-->
			</div>
			<!--end::Sign-in Method-->
			
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->
@include('layouts.footer')