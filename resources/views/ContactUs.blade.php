<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>homepage version 5</title>
    @vite(['resources/js/app.js','resources/sass/app.scss'])

    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

</head>

<body style="background: #FAFAF5;">
@include('layout.navbar')

    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1 style="font-family: 'Inter', sans-serif; font-size: 70px; font-weight: bold;">Contact Us Form</h1>
                    <p style="font-family: 'Inter', sans-serif; font-size: 28px;">Feel free to contact us at anytime</p>
                    <form method="POST" action="{{route('contact.store')}}" id="contactForm">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <!-- Name Field -->
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" name="name" placeholder="📛 Your Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <!-- Email Address Field -->
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email" placeholder="📧 Email Address">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <!-- Query Field -->
                            <textarea class="form-control @error('message') is-invalid @enderror" id="inputQuery" name="message" placeholder="❓ What's Your Query?" rows="5"></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        @if(isset($message))
                        <div class="alert alert-success" role="alert">
                            {{$message}}
                        </div>
                        @endif
                        <div class="d-grid gap-2">
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary" style="font-size: 28px; font-weight: bold; background-color: black;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple-navbar---apple.js"></script>
</body>

</html>
