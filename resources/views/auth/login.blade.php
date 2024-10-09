<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Arsha Bootstrap Template - Index</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon" />
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />

        <link
            href="{{
                asset('arsha/assets/vendor/bootstrap/css/bootstrap.min.css')
            }}"
            rel="stylesheet"
        />
    </head>

    <body>
        <div class="container" style="margin-top:10%">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ __("Login") }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label
                                        for="email"
                                        class="col-md-4 col-form-label text-md-right"
                                        >{{ __("E-Mail Address") }}</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="email"
                                            type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required
                                            autocomplete="email"
                                            autofocus
                                        />

                                        @error('email')
                                        <span
                                            class="invalid-feedback"
                                            role="alert"
                                        >
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label
                                        for="password"
                                        class="col-md-4 col-form-label text-md-right"
                                        >{{ __("Password") }}</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="password"
                                            type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password"
                                            required
                                            autocomplete="current-password"
                                        />

                                        @error('password')
                                        <span
                                            class="invalid-feedback"
                                            role="alert"
                                        >
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input"
                                            type="checkbox" name="remember"
                                            id="remember"
                                            {{
                                                old("remember")
                                                    ? "checked"
                                                    : ""
                                            }}>

                                            <label
                                                class="form-check-label"
                                                for="remember"
                                            >
                                                {{ __("Remember Me") }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            {{ __("Login") }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a
                                            class="btn btn-link"
                                            href="{{
                                                route('password.request')
                                            }}"
                                        >
                                            {{ __("Forgot Your Password?") }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
