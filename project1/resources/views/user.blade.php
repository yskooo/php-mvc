@extends('common.main')
@section('content')

    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',
    ])

    <style>
        :root {
            --bg: #ffffff;
            --ink: #000000;
            --muted: #666666;
            --line: #000000;
            --shadow: none;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: var(--ink);
            background: var(--bg);
            min-height: 100vh;
        }

        .page-shell {
            min-height: 100vh;
            padding: 40px 20px;
        }

        @media (min-width: 768px) {
            .menu-toggle {
                display: none;
            }
        }

        .menu-toggle span {
            display: block;
            width: 25px;
            height: 2px;
            background: #000;
            transition: 0.3s;
        }

        .top-links {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: #fff;
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 30px;
            z-index: 1000;
        }

        .top-links.active {
            display: flex;
        }

        @media (min-width: 768px) {
            .top-links {
                position: static;
                height: auto;
                width: auto;
                display: flex;
                flex-direction: row;
                background: transparent;
                gap: 20px;
                font-size: 0.9rem;
            }
        }

        .top-links a {
            color: #000;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 800;
            text-transform: uppercase;
            border-bottom: 2px solid transparent;
        }

        @media (min-width: 768px) {
            .top-links a {
                font-size: 0.9rem;
                font-weight: 500;
                border-bottom-width: 1px;
            }
        }

        .content {
            padding: 40px 20px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        @media (min-width: 768px) {
            .hero-grid {
                grid-template-columns: 300px 1fr;
                gap: 40px;
            }
        }

        .login-card {
            border: 1px solid #000;
            padding: 20px;
            height: fit-content; /* Only as long as the content */
            align-self: start;   /* Prevents stretching to full height */
        }

        @media (min-width: 768px) {
            .login-card {
                padding: 30px;
            }
        }

        .field {
            margin-bottom: 20px;
        }

        .field label {
            display: block;
            font-size: 0.8rem;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 8px;
            letter-spacing: 0.05em;
        }

        .field input {
            width: 100%;
            height: 40px;
            border: 1px solid #000;
            padding: 0 12px;
            font-size: 16px;
            border-radius: 0;
            background-color: #fff !important;
            -webkit-appearance: none;
            color: #000;
        }

        /* The "Nuclear Option" to force white background on laptop Chrome/Edge/Safari */
        .field input:-webkit-autofill,
        .field input:-webkit-autofill:hover,
        .field input:-webkit-autofill:focus,
        .field input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 1000px white inset !important;
            box-shadow: 0 0 0 1000px white inset !important;
            -webkit-text-fill-color: black !important;
            color: black !important;
            background-clip: content-box !important;
        }

        /* Specifically for Chrome's "selected" state which often ignores shadows */
        input:-internal-autofill-selected {
            background-color: white !important;
            -webkit-box-shadow: 0 0 0 1000px white inset !important;
        }

        .login-actions {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .login-actions button {
            background: #000;
            color: #fff;
            border: none;
            padding: 12px;
            font-weight: 800;
            text-transform: uppercase;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .login-actions button:hover {
            opacity: 0.8;
        }

        .login-actions a {
            color: #000; /* Fixed: Changed from #666 to black */
            text-decoration: underline;
            font-size: 0.8rem;
            text-align: center;
        }

        .pricing-panel {
            text-align: left;
        }

        .pricing-title {
            margin: 0 0 20px 0;
            font-size: 3rem;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 0.9;
        }

        .pricing-copy {
            max-width: 500px;
            color: #000;
            font-size: 1rem;
            line-height: 1.4;
            margin-bottom: 40px;
        }

        .tiles {
            display: grid;
            grid-template-columns: 1fr; /* Mobile: 1 column */
            gap: 1px;
            background: #000;
            border: 1px solid #000;
            margin-bottom: 40px;
        }

        @media (min-width: 480px) {
            .tiles {
                grid-template-columns: repeat(2, 1fr); /* Tablet: 2 columns */
            }
        }

        @media (min-width: 992px) {
            .tiles {
                grid-template-columns: repeat(3, 1fr); /* Laptop: 3 columns */
            }
        }

        .tile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(100%) contrast(120%);
            transition: filter 0.3s ease, transform 0.3s ease;
        }

        .tile:hover img {
            filter: grayscale(0%) contrast(100%);
            transform: scale(1.05);
        }

        .compare-title {
            font-size: 1.5rem;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .pricing-table {
            width: 100%;
            border-collapse: collapse;
        }

        .pricing-table th,
        .pricing-table td {
            padding: 10px;
            border: 1px solid #000;
            text-align: center;
            font-size: 0.8rem;
        }

        @media (min-width: 768px) {
            .pricing-table th,
            .pricing-table td {
                padding: 15px;
                font-size: 0.9rem;
            }
        }

        .pricing-table th:first-child,
        .pricing-table td:first-child {
            text-align: left;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 0.7rem;
            width: 30%;
        }

        @media (min-width: 768px) {
            .pricing-table th:first-child,
            .pricing-table td:first-child {
                font-size: 0.8rem;
            }
        }

        .pricing-table thead th {
            text-transform: uppercase;
            background: #f0f0f0;
        }

        .check {
            font-weight: 900;
        }

        @media (max-width: 800px) {
            .hero-grid {
                grid-template-columns: 1fr;
            }
            .pricing-title {
                font-size: 2rem;
            }
        }
    </style>

    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-12 col-md-6 col-lg-4">
                    <aside class="login-card w-full">
                        <form method="POST" action="{{ route('user') }}">
                            @csrf
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            <div class="field">
                                <label for="first-name">First Name</label>
                                <input id="first-name" name="first_name" type="text" placeholder="Enter your first name">
                            </div>
                            <div class="field">
                                <label for="middle-name">Middle Name</label>
                                <input id="middle-name" name="middle_name" type="text" placeholder="Enter your middle name">
                            </div>
                            <div class="field">
                                <label for="last-name">Last Name</label>
                                <input id="last-name" name="last_name" type="text" placeholder="Enter your last name">
                            </div>
                            <div class="field">
                                <label for="email">Email</label>
                                <input id="email" name="email"  placeholder="name@example.com">
                            </div>

                            <div class="field">
                                <label for="password">Password</label>
                                <input id="password" name="password" type="password" placeholder="Enter your password">
                            </div>

                            <div class="login-actions">
                                <button type="submit" value="Submit">Login</button>
                            </div>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </main>

@endsection
