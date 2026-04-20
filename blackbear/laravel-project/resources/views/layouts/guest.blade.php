<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/frontend/images/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Black Bear') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}" />
    <script src="{{ asset('resources/js/app.js') }}"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f3f4f6;
            font-family: 'Figtree', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 2rem 1.5rem; /* Added padding for equal spacing */
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo {
            margin-bottom: 1.5rem;
        }

        .logo img {
            max-width: 100%;
        }

        .login-container h2 {
            margin-bottom: 1.5rem;
            color: #333;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            margin: 0.5rem 0;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            background-color: #f9fafb;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.2s ease-in-out;
        }

        .form-control:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3);
        }

        .btn-primary {
            display: block;
            width: 100%;
            padding: 0.75rem;
            margin-top: 1rem;
            background-color: #BD0D19;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.2s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #141513;
        }

        .text-small {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.875rem;
            color: #6b7280;
        }

        .text-small a {
            color: #4f46e5;
            text-decoration: underline;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .checkbox-container label {
            font-size: 0.875rem;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo Section -->
        <div class="logo">
            <img src="{{ asset('assets/admin/images/logo/black-bear-black.png') }}" alt="Logo">
        </div>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="form-control">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="checkbox-container">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">{{ __('Remember me') }}</label>
            </div>

            <!-- Login Button -->
            <button type="submit" class="btn-primary">{{ __('Log in') }}</button>
        </form>

        <!-- Forgot Password -->
        <!--<div class="text-small">-->
        <!--    @if (Route::has('password.request'))-->
        <!--        <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>-->
        <!--    @endif-->
        <!--</div>-->
    </div>
</body>
</html>

