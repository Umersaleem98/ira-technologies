@include('layouts.admin.head')

<title>Login</title>

<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Sign In To Admin</h3>

			<div class="login-form">

				{{-- Display Errors --}}
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul class="mb-0">
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

        <form method="POST" action="{{ route('login.post') }}">
					@csrf

					<div class="form-group form-floating-label">
						<input
							id="email"
							name="email"
							type="email"
							class="form-control input-border-bottom"
							value="{{ old('email') }}"
							required
						>
						<label for="email" class="placeholder">Email</label>
					</div>

					<div class="form-group form-floating-label">
						<input
							id="password"
							name="password"
							type="password"
							class="form-control input-border-bottom"
							required
						>
						<label for="password" class="placeholder">Password</label>

						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
					</div>

					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input
								type="checkbox"
								class="custom-control-input"
								id="remember"
								name="remember"
							>
							<label class="custom-control-label" for="remember">Remember Me</label>
						</div>

						<a href="#" class="link float-right">Forget Password?</a>
					</div>

					<div class="form-action mb-3">
						<button type="submit" class="btn btn-primary btn-rounded btn-login">
							Sign In
						</button>
					</div>

				</form>

				<div class="login-account">
					{{-- Optional signup --}}
				</div>

			</div>
		</div>
	</div>

@include('layouts.admin.script')
