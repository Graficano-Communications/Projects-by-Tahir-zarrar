<x-guest-layout>
 


</x-guest-layout>


<main>
		<div class="row g-0">
			<!-- left -->
		

			<!-- Right -->
			<div class="col-sm-10 col-lg-5 d-flex m-auto vh-100">
				<div class="row w-100 m-auto">
					<div class="col-sm-10 my-5 m-auto">

						<a href="/"><img src="{{ asset('medimax_assets/img/Logo-medimax.png')}}" class="h-65px mb-4" alt="logo"></a>

						<h2 class="mb-0">Welcome back</h2>
						<p class="mb-0 ">Welcome back, please enter your detail</p>

						<!-- Social buttons -->
						<!-- <div class="row mt-5">
							
							<div class="col-xxl-6 d-grid">
								<a href="#" class="btn border bg-light mb-2 mb-xxl-0"><i class="fab fa-fw fa-google text-google-icon me-2"></i>Signup with Google</a>
							</div>
						
							<div class="col-xxl-6 d-grid">
								<a href="#" class="btn border bg-light mb-0"><i class="fab fa-fw fa-facebook-f text-facebook me-2"></i>Signup with Facebook</a>
							</div>
							
							<div class="position-relative my-5">
								<hr>
								<p class="small position-absolute top-50 start-50 translate-middle bg-body px-4">Or</p>
							</div>
						</div> -->
                        <x-auth-session-status class="mb-4 " :status="session('status')"  />
						<!-- Form START -->
						<form   method="POST" action="{{ route('login') }}" class="my-5">
                        @csrf
							<!-- Email -->
							<div class="input-floating-label form-floating mb-4">
								<input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
								<label for="floatingInput">Email address</label>
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
							</div>

							<!-- Password -->
							<div class="input-floating-label form-floating mb-4 position-relative">
								<input type="password" name="password" class="form-control fakepassword pe-6" id="psw-input" placeholder="Enter your password">
								<label for="floatingInput">Password</label>
								<span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2">
									<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
								</span>
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
							</div>

							<!-- Check box -->
							<div class="mb-4 d-flex justify-content-between">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="checkbox-1">
									<label class="form-check-label" for="checkbox-1" name="remember">Remember me</label>
								</div>
                                @if (Route::has('password.request'))
								<a href="{{ route('password.request') }}" class="link-underline-primary"> Forgot password?</a>
                                @endif
							</div>

							<!-- Button -->
							<div class="align-items-center mt-0">
								<div class="d-grid">
									<button class="btn btn-dark mb-0" type="submit">Login</button>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
</main>