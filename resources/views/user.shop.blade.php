<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */
        .navbar {
          margin-bottom: 50px;
          border-radius: 0;
        }

        /* Remove the jumbotron's default bottom margin */
         .jumbotron {
          margin-bottom: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {

          padding: 25px;
        }
        .affix {
        top: 0;
        width: 100%;
        z-index: 9999 !important;

      }

      .affix + .container-fluid {
        padding-top: 70px;
      }
      .col-sm-3 {
    font-family: 'lucida console', sans-serif;
    font-size: 18px;
    color: #ffffffd1;
    text-align: center;
    margin-top: 10px;
    padding-left: 5px;
}
      .col-sm-4{
        margin-inline: 40px;
        margin-left: 13px;


      }
      </style>
    </head>
       <div class="" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: pink">

          <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="background-color:pink">
            <ul class="nav navbar-nav">
              <li class="active"><a href="# " style="background-color:pink; color: black" >Home</a></li>
              <li><a href="#" style="color: black">Produk</a></li>
              <li><a href="#" style="color: black">Soucess</a></li>
              <li><a href="#" style="color: black">Search</a></li>
            </ul>

          <ul class="nav navbar-nav navbar-right" style="margin-inline: 2%">
            <li><a href="#" style="color: black"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
            <li><a href="#" style="color: black"><span class="glyphicon glyphicon-shopping-cart" ></span> Cart</a></li>
          </ul>
        </nav>
       </div>
      </nav>
    <br>
    <div class="row-2 text-center" style="padding-left: 20% "  >
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset('assets/bootstrap-5.3.2-dist/foto/'.$produk->foto)}}" alt="Paris" width="400" height="300">
            <br>
          </div>
        </div>
        <div class="col-sm-5" style="background-color: pink; padding-left:10px" >
              <h4>{{$produk->name}}</h4>
              <h4>{{$produk->deskripsi}}</h4>
         </div>
      </div>
    </div>
          <div class="col-sm-4" style="padding-top: 5%;">
            <div class="well">
              <p>Harga:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp.{{ $produk->harga}}</p>
              <div class="input-group">
                <label for="quantity">Jumlah</label>
                <input type="number" class="form-control" id="quantity" placeholder="Masukkan jumlah produk">
            </div>
              {{-- <p>Jumlah Beli:</p> --}}
              <ul class="pager">
                <li><a href="/ceck-out">Beli Sekarang</a></li>
                <li><a href="/keranjang">Keranjang</a></li>
              </ul>

          </div>
          </div>
          </div>
          </div>
        </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>