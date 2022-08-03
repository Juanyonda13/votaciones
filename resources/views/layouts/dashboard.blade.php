<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>salud</title>
</head>
<body>
   
        <div class="container ff">           
             <div class="ps-2">
                  <div class="form-group">
                    <a class="bi bi-box-arrow-left g" href="{{route('cerrarSesion')}}"></a>
                  </div>
             </div>
        </div>
   
    <section class="body container-fliud d-flex col-12">
        @include('sweetalert::alert')
           <section class="col-2 d-flex  flex-column" style="height: 100vh;">
                 <div class="w-100 d-flex p-5  justify-content-center">

                    <h5 class="font-1 active d-flex justify-content-center t">{{$user->name}} </h5>

                    <img src="{{asset("storage/".Auth()->user()->avatar)}}"/> 
                 </div>
                 <nav class="d-flex flex-wrap flex-column nav w-100 p-4 mt-5 h-50 justify-content-between">
                    <a class="nav-link d-flex justify-content-center t" href="#">Home</a>
                    <a class="nav-link d-flex justify-content-center t">calendario</a>
                    <a class="nav-link d-flex justify-content-center t">histotial medico</a>
                    <a class="nav-link d-flex justify-content-center t">Ajustes</a>
                    
                 </nav>
           </section>
           <section class="col-12 d-flex border">
            <div class="container-fluid card col-12">
                   @yield('content')
            </div>
                 
           </section>
    </section>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

<style>

    *{
        margin: 0px;
        top: 0;
        bottom: 0;
    }

    body{
        background-color: #437176;
    }
    .g{
        width: 10%;
        height: 50px;
    }

    header{
        height: 90px;
        background-color: #FFFF
    }

    .ff{
        display: flex;
        justify-content: flex-end;
        height: 60px;
        padding: 0px;

    }
    .back1 {
        background-color: #69A6A4
    }

    .btn1 {
        background-color: #DC5716;
        color: #FFFF
    }

    .t{
        font-size: 30px;
        margin-top: 0px
    }
</style>
</html>