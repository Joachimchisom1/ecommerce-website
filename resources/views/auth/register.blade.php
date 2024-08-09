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
                border: 1px solid transparent;
                outline: none;
                color: black;
                font-weight: 700;
                border-radius: 5px;
                transition: 300ms ease;

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


<div class="container">

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="input-field">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="input-field">
            <label for="email"> {{ __('Email') }}</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!--phone-->
        <div class="input-field">
            <label for="phone"> {{ __('Phone') }}</label>
            <input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>



        <!-- Address -->
        <div class="input-field">
            <label for="address"> {{ __('Address') }}</label>
            <input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="input-field">
            <label for="password">{{ __('Password') }}</label>

            <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="input-field">
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>

            <input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex links">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button class="ms-4">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>

