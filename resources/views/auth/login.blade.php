<x-painel.layout-login>

    <x-auth-session-status class="mb-4" :status="session('status')" />

            <form class="user" method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Esse aqui é o meu input E-Mail --}}
                <div class="form-group">
                    <input type="email"  name="email" id="email" class="form-control form-control-user"
                    value="{{ old('email') }}" aria-describedby="emailHelp"
                        placeholder="Enter Email Address...">
                        {{-- Component de Error --}}
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="form-group">
                    <input type="password" class="form-control form-control-user"
                    id="password"   name="password" placeholder="Password">
                    {{-- Component de Error --}}
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Lembrar Credenciais
                            </label>
                    </div>
                </div>

                <div class="gap-2 d-grid">

                    <button type="submit" class="btn btn-primary btn-user btn-block" type="button">LOGIN</button>

                </div>


                <hr>

                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Login with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                </a>
            </form>



@push('scripts')

<!-- Bootstrap core JavaScript-->
<script src=" {{ asset('painel/vendor/jquery/jquery.min.js') }} "></script>
<script src=" {{ asset('painel/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

<!-- Core plugin JavaScript-->
<script src=" {{ asset('painel/vendor/jquery-easing/jquery.easing.min.js') }} "></script>

<!-- Custom scripts for all pages-->
<script src=" {{ asset('painel/js/sb-admin-2.min.js') }} "></script>


@endpush



</x-painel.layout-login>
