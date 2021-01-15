<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif
    }
</style>

<body>
    <div class="container-fluid my-2">
<<<<<<< HEAD
        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="80" />
    </div>
    <div class="w-full py-32 bg-opacity-50 bg-cover bg-no-repeat bg-center " style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset("images/hero.jpg") }}">
        <h1 class="text-white text-center text-5xl font-medium">Permit Management System</h1>
=======
        <img src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Logo" width="50" />
    </div>
    <div class="w-full py-32 bg-opacity-50 bg-cover bg-no-repeat bg-center " style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('{{ asset("images/hero.jpg") }}">
        <h1 class="text-white text-center text-5xl font-medium">Lorem Ipsum Dolor</h1>
>>>>>>> 01dc5baa6efebdf000efb3768f08ad4085a76dfe
    </div>
    <div class="flex flex-col items-center mb-6">
        <div class="w-full max-w-md mt-8 px-6 py-6 bg-gray-50 shadow-md rounded-md">
            <h2 class="text-gray-800 text-2xl font-bold">Log In</h2>
            <hr class="my-2">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="w-full mb-6 md:mb-0">
                    <label class="block text-gray-600 text-sm mb-2" for="email">Email</label>
                    <input
                        class="@error('email') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                        type="email" name="email">
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message}}</p>
                    @enderror
                </div>
                <div class="w-full mt-4 mb-6 md:mb-0">
                    <input class="hidden js-password-toggle" id="toggle" type="checkbox" />

                    <label class="block text-gray-600 text-sm mb-2" for="password">Password</label>
                    <label
                        class="absolute top-26 ml-80 mt-2 bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded text-gray-600 text-xs cursor-pointer js-password-label"
                        for="toggle">show</label>
                    <input
                        class="@error('password') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full js-password"
                        type="password" name="password" id="password">
                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message}}</p>
                    @enderror 
                </div>
                <div class="flex justify-end mt-6">
                    <p class="mt-2 mr-2 underline text-blue-700"><a href="{{ url('forgot-password') }}">Forgot password?</a>
                    </p>
                    <button type="submit"
                        class="w-fullinline-flex items-center px-12 py-2 bg-blue-600 border border-transparent rounded-md text-base text-white hover:bg-blue-700 focus:outline-none transition ease-in-out duration-150 ml-2">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    const passwordToggle = document.querySelector('.js-password-toggle')

    passwordToggle.addEventListener('change', function() {
        const password = document.querySelector('.js-password'),
            passwordLabel = document.querySelector('.js-password-label')

        if (password.type === 'password') {
            password.type = 'text'
            passwordLabel.innerHTML = 'hide'
        } else {
            password.type = 'password'
            passwordLabel.innerHTML = 'show'
        }

        password.focus()
    })
</script>

</html>