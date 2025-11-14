<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title", "Authenticate")</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

<div class="auth-bg d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg border-0 p-4" style="width: 100%; max-width: 450px; border-radius: 18px;">
        <div class="text-center mb-4">

            <img src="{{ asset('propertia-logo.png') }}" alt="" style="max-width: 150px;">
            <p class="text-muted" style="font-size: 0.9rem;">Access your Real Estate Dashboard</p>
        </div>

        <form action="/">
            <div class="mb-3">
                <label class="form-label fw-semibold">Email Address</label>
                <input type="email" class="form-control form-control-lg" placeholder="example@mail.com" value="abc@example.com">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <input type="password" class="form-control form-control-lg" placeholder="••••••••" value="123456">
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <a href="#" class="text-decoration-none" style="color: #003366;">Forgot Password?</a>
            </div>

            <button type="submit" class="btn w-100 py-2" 
                    style="background: #003366; color: white; border-radius: 8px;">Login</button>
        </form>
    </div>
</div>






    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


</body>

</html>