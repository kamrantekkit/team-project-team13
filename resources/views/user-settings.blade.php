<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <nav class="navbar navbar-expand-md bg-body">
        <div class="container-fluid"><a class="navbar-brand" href="#">Brand</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Third Item</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <div class="container">





        <div class="card text-center">
            <div class="card-header">
                Personal Info
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2" style="display: flex;
                    flex-direction: column;
                    align-items: flex-start">
                        <label>Full Name</label>
                        <input class="form-input" type="text" name="fname" style="width: 100%">
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2" style="display: flex;
                    flex-direction: column;
                    align-items: flex-start">
                        <label>Birthday</label>
                        <input class="form-input" type="date" name="bdate" style="width: 100%">
                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2" style="display: flex;
                    flex-direction: column;
                    align-items: flex-start">
                        <label>Email</label>
                        <input class="form-input" type="email" name="email" style="width: 100%">
                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2" style="display: flex;
                    flex-direction: column;
                    align-items: flex-start">
                        <label>Password</label>
                        <input class="form-input" type="password" name="password" style="width: 100%">
                    </div>



                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <input type="button" value="Update" class="btn btn-primary"/>
                    </div>
                </div>
            </div>
          </div>

    </div>
</body>

</html>
