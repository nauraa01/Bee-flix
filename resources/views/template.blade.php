<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body {
                background-color: #eeeeee;
            }

            hr {
                border: 1px solid #004085;
            }

            .content {
                background: #ffffff;
                border-radius: 8px;
            }

            .image-background {
                background-size: cover;
                height: 700px;
                border-radius: 8px
            }

            .input-text {
                border: 0 !important;
                outline: 0 !important;;
                background: transparent !important;;
                border-bottom: 1px solid #4dc0b5 !important;;
            }

            li.active a {
                background-color: #4dc0b5 !important;
                border-color: #4dc0b5 !important;
                color: #ffffff !important;
            }
        </style>

        <title>BeeFlix</title>
    </head>
    <body>
        <div class="container">
            <div class="row pt-3 pb-3">
                <div class="col-12 text-info">
                    <h3>BeeFlix</h3>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-3 btn-group">
                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark align-middle"><i class="fa fa-arrow-left"></i> KEMBALI</a>
                    <a href="{{ route('home') }}" class="btn btn-sm btn-ligh align-middlet">LIHAT SEMUA FILM</a>
                </div>
            </div>
            <div class="content pl-3 pr-3 mt-2">
                @yield('content')
            </div>
        </div>

        <!-- Script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
