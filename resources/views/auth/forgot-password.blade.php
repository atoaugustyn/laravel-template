<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif
    }
</style>


<body>
    <div class="flex flex-col items-center">
        <div class="w-full max-w-md mt-8 px-6 py-6 bg-gray-50 shadow-md rounded-md">
            <h2 class="text-gray-800 text-2xl font-bold mb-2">Reset Password</h2>
            <p class="text-sm">Forgot your password? Enter your email address and we’ll send you a recovery link to
                choose a new one.</p>
            <hr class="my-2">
            <form action="{{ route('password.request') }}" method="POST">
                @csrf
                <div class="w-full mt-4 mb-6 md:mb-0">
                    <label class="block text-gray-600 text-sm mb-2" for="email">Email</label>
                    <input
                        class="@error('email') bg-red-100 @enderror px-2 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50 block w-full"
                        type="email" name="email" value="{{ old ('email') }}">
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message}}</p>
                    @enderror
                </div>
                <div class="flex justify-end mt-6">
                    <p class="mt-2 mr-4 underline text-blue-700"><a href="{{ url('login') }}">Back to login</a>
                    </p>
                    <button type="submit"
                        class="w-fullinline-flex items-center px-12 py-2 bg-blue-600 border border-transparent rounded-md text-base text-white hover:bg-blue-700 focus:outline-none transition ease-in-out duration-150 ml-2">
                        Send recovery email
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
