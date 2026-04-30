<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate</title>
    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',
    ])

    <style>
        body {
            background-color: #fff;
            color: #000;
            font-family: 'Inter', -apple-system, sans-serif;
            padding: 40px;
        }

        h1 {
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .result-item {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #eee;
            padding: 15px 0;
            font-size: 1.2rem;
        }

        .label {
            font-weight: 800;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.1em;
        }

        .btn-warning {
            background-color: #000 !important;
            border-color: #000 !important;
            color: #fff !important;
            border-radius: 0;
            font-weight: 800;
            text-transform: uppercase;
        }

        .form-control {
            border: 1px solid #000;
            border-radius: 0;
        }

        .border-danger {
            border: 1px solid #000 !important;
        }
    </style>
</head>

<body class="container">
    <h1>Calculations</h1>

    <div class="result-item">
        <span class="label">Sum</span>
        <span>{{ $sum }}</span>
    </div>
    <div class="result-item">
        <span class="label">Difference</span>
        <span>{{ $difference }}</span>
    </div>
    <div class="result-item">
        <span class="label">Product</span>
        <span>{{ $product }}</span>
    </div>
    <div class="result-item">
        <span class="label">Quotient</span>
        <span>{{ $quotient }}</span>
    </div>

    <div class="mt-5">
        <button type="button" class="btn btn-warning">Action Button</button>
    </div>

    <div class="mt-5">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>

    <div class="row g-1 mt-5">
        @for ($i = 0; $i < 6; $i++)
            <div class="col-12 col-md-6 col-lg-4 border border-dark p-3">
                <span class="label">Item {{ $i + 1 }}</span>
                <div>Pen pineapple <i class="bi bi-apple"></i> pen</div>
            </div>
        @endfor
    </div>
</body>
</html>
