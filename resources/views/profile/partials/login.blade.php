<style>
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
    
</style>

<section class="gradient-form" style="">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Welcome to Blog</h4>
                </div>

<form method="POST" action="{{ route('login') }}">
    @csrf
    <p>Please login to your account</p>

    <!-- Email Address -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email address" />
        <label class="form-label" for="email">Email</label>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password" />
        <label class="form-label" for="password">Password</label>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="form-check mb-4">
        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
        <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
    </div>

    <div class="text-center pt-1 mb-5 pb-1">
        <x-primary-button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
            {{ __('Log in') }}
        </x-primary-button>
        @if (Route::has('password.request'))
            <a class="text-muted" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
        @endif
    </div>

    <div class="d-flex align-items-center justify-content-center pb-2">
        <p class="mb-0 me-2">Don't have an account?</p>
    </div>
    <div class="d-flex align-items-center justify-content-center">
    <a href="{{ route('register') }}" class="btn btn-outline-danger">Register Now</a>
    </div>
  
</form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>