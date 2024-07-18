<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="CRMS - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
        <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PTI - @yield('title')</title>

        @include('layout.partials.head')
        <x-head.tinymce-config />

    </head>

    @if (
        !Route::is([
            'under-maintenance',
            'two-step-verification-3',
            'two-step-verification-2',
            'two-step-verification',
            'success-3',
            'success-2',
            'success',
            'reset-password-3',
            'reset-password-2',
            'reset-password',
            'register-3',
            'register-2',
            'register',
            'login-3',
            'login-2',
            'lock-screen',
            'coming-soon',
            'index',
        ]))
    @endif

    <body>
        @if (Route::is(['audio-call', 'chart-apex', 'chart-c3', 'chart-flot', 'chart-js', 'chart-morris', 'chart-peity']))
            <div id="global-loader">
                <div class="whirly-loader"> </div>
            </div>
        @endif
        @if (Route::is(['chat']))

            <body class="main-chat-blk">
        @endif
        @if (Route::is([
                'under-maintenance',
                'two-step-verification-3',
                'two-step-verification-2',
                'two-step-verification',
                'success-3',
                'success-2',
                'success',
                'reset-password-3',
                'reset-password-2',
                'reset-password',
                'register-3',
                'register-2',
                'register',
                'login-3',
                'login-2',
                'lock-screen',
                'coming-soon',
                'index',
            ]))

            <body class="error-page">
        @endif
        <!-- Main Wrapper -->
        <div class="main-wrapper">
            @if (Route::is(['deals-dashboard', 'leads-dashboard', 'dashboard', 'project-dashboard']))
                <div class="preloader">
                    <div class="preloader-blk">
                        <div class="preloader__image"></div>
                    </div>
                </div>
            @endif
            @if (
                !Route::is([
                    'under-maintenance',
                    'two-step-verification-3',
                    'two-step-verification-2',
                    'two-step-verification',
                    'success-3',
                    'success-2',
                    'success',
                    'reset-password-3',
                    'reset-password-2',
                    'reset-password',
                    'register-3',
                    'register-2',
                    'register',
                    'login-3',
                    'login-2',
                    'lock-screen',
                    'coming-soon',
                    'email-verification',
                    'email-verification-2',
                    'email-verification-3',
                    'error-404',
                    'error-500',
                    'forgot-password',
                    'forgot-password-2',
                    'forgot-password-3',
                    'index',
                    'login',
                ]))
                @include('layout.partials.header')
                @include('layout.partials.sidebar')
            @endif
            @yield('content')
        </div>
        <!-- /Main Wrapper -->

        @include('layout.partials.footer-scripts')
    </body>

</html>
