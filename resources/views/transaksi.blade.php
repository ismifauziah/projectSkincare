<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Session::get('pesan'))
    {{ Session::get('pesan') }}
@endif <br>
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top" aria-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="#">Skincares<span>.</span></a>

            <button class="container">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">

            </div>

        </div>

    </nav>
</body>
</html>