<style>
body{
    background-image: url("{{asset('/images/onlinestorbg.jpg')}}");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.container{
    height: 90vh;
    display: flex;
    justify-content: center;
    align-items: center;

    form{
        display: flex;
        border: 1px solid #ccc;
        flex-direction: column;
        gap: 2rem;
        width: min(40rem, 100%);
        padding:  3rem  2rem;
        align-items: center;
        backdrop-filter: blur(5px);

        .input-field{
            color: #ccc;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            width: 100%;

            label{
                font-size: 12px;
                text-transform: capitalize;
                font-weight: 600;
                color: #f4d0a2;
            }
            input{
                outline: none;
                border: 1px solid #f4d0a2;
                background: transparent;
                padding: 0.5rem 1rem;
                font-size: 14px;
                color: #fff;
            }
        }

        .remember{
            display: flex;
            justify-self: flex-start;
            align-self: flex-start;
            width: 100%;
            justify-content: space-between;
            color: #f4d0a2;
        }

        .links{
            display: flex;
            justify-self: flex-start;
            align-self: flex-start;
            width: 100%;
            justify-content: space-between;

            .underline{
                color: #7DA6FF;
            }
            button{
                padding: 1rem 2rem;
                font-size: 14px;
                background: #f4d0a2;
                border: none;
                outline: none;
                color: black;
                font-weight: 700;
                border-radius: 5px;
                &:hover{
                    color: #f4d0a2;
                    cursor: pointer;
                    background: transparent;
                    border: #f4d0a2 1px solid;
                }
            }
        }
    }
}
@media(width < 700px){
    .container{
        min-height: 100vh;
    }
}
</style>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="input-field">
            <label for="email">email please</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="input-field"">
            <label for="password">Password</label>

            <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block remember mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="block links mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button class="ms-3 mt-3 p-3 block">
                {{ __('Log in') }}
            </button>
        </div>
    </form>

</div>
