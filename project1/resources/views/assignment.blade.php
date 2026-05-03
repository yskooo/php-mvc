@extends('common.main')

@section('content')
    <div class="row g-4 align-items-start">
        <div class="col-lg-4">
            <div class="card p-4 h-100">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control" placeholder="Enter your password">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-dark">Login</button>
                        <a href="#" class="text-center small">Forgot password?</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-8">
            <h1 class="display-5 fw-bold text-uppercase mb-3">Pricing</h1>
            <p class="lead mb-4">
                Lorem ipsum is simply dummy text of the printing and typesetting industry.
                Lorem ipsum has been the industry’s standard dummy text ever since the 1500s.
            </p>

            <div class="row row-cols-2 row-cols-md-3 g-3 mb-4">
                <div class="col"><img src="https://picsum.photos/seed/1/400/400" class="img-fluid" alt="Minimalist Object 1"></div>
                <div class="col"><img src="https://picsum.photos/seed/2/400/400" class="img-fluid" alt="Minimalist Object 2"></div>
                <div class="col"><img src="https://picsum.photos/seed/3/400/400" class="img-fluid" alt="Minimalist Object 3"></div>
                <div class="col"><img src="https://picsum.photos/seed/4/400/400" class="img-fluid" alt="Minimalist Object 4"></div>
                <div class="col"><img src="https://picsum.photos/seed/5/400/400" class="img-fluid" alt="Minimalist Object 5"></div>
                <div class="col"><img src="https://picsum.photos/seed/6/400/400" class="img-fluid" alt="Minimalist Object 6"></div>
            </div>

            <h2 class="h4 fw-bold text-uppercase mb-3">Compare Plans</h2>

            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th class="text-start">Feature</th>
                            <th>Free</th>
                            <th>Pro</th>
                            <th>Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start fw-semibold text-uppercase">Public</td>
                            <td>✓</td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td class="text-start fw-semibold text-uppercase">Private</td>
                            <td></td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td class="text-start fw-semibold text-uppercase">Permissions</td>
                            <td></td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
