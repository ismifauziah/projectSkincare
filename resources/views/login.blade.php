<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href={{asset('asset/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Halaman admin</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-success">
            <div class="container-fluid">
                <a href="#"  class="navbar-brand">ismi skincare</a>
            </div>
        </nav>
        <div class="container">
            @if (Session::has('pesan'))
                <div class="alert alert-seccess">{{ Session::get('pesan')}}</div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            Login
                        </div>
                        <div  class="card-body">
                            <form method="post" action="/auth">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                                <div class="form-group mt-1">
                                    <label for="password">password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-secondary btn-block mt-3 w-100">Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
<script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>