
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        {{-- fontawsome --}}
        <link rel="stylesheet" href="/fontawesome/css/all.min.css">
        
        {{-- Bootstrap icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        
        {{-- Table css --}}
        {{-- <link rel="stylesheet" type="text/css" href="/datatable/datatables.min.css"/> --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jqc-1.12.4/dt-1.12.1/datatables.min.css"/>

        {{-- My style --}}
        <link rel="stylesheet" href="/css/style.css">
        <title>sky news | {{ $title }}</title>
    </head>
    <body>

    @include('partials.navbar')

        <div class=" pt-5 mt-4">
            @yield('container')
        </div>

    @include('partials.footers')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="/fontawesome/js/all.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jqc-1.12.4/dt-1.12.1/datatables.min.js"></script>

    <script type="text/javascript" >
        $(document).ready( function () {
            $('#datatables').DataTable();
        } );
        </script>

    </body>

</html>
