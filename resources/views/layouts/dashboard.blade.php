<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>salud</title>
</head>
<body>
    <header class="container-fluid d-flex mw-100 border pt-2 ">
        <div class="container d-flex ms-5">
               <h2 class="">Salud</h2>
        </div>
        <div class="container w-50 d-flex justify-content-between ">
            <div class="d-flex form-group">
                <input type="text" class="form-control h-75 w-75 input-group">
                <button class="btn btn-group h-75 btn-primary">Buscar</button>
            </div>
             <div class="d-flex ps-2">
                  <div class="form-group">
                    <select id="my-select" class="form-control" name="">
                      <option selected>juan camilo yonda</option>
                      <option value=""><a href="detail_perfil.html">Ajustes</a></option>
                      <option value="">salir</option>
                    </select>
                  </div>
             </div>
        </div>
    </header>
    <section class="body container-fliud d-flex col-12">
           <section class="col-2 d-flex  border flex-column" style="height: 100vh;">
                 <div class="w-100 d-flex p-5  justify-content-center">
                    <h1 class="font-1 active">S</h1>
                 </div>
                 <nav class="d-flex flex-column nav w-100 p-4 h-50 justify-content-between">
                    <a class=" nav-link d-flex justify-content-center">Home</a>
                    <a class="nav-link d-flex justify-content-center">calendario</a>
                    <a class="nav-link d-flex justify-content-center">histotial medico</a>
                    <a class="nav-link d-flex justify-content-center">Ajustes</a>
                 </nav>
           </section>
           <section class="col-10 d-flex border">
            <div class="container card col-11 m-3 ">
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
    .back1 {
        background-color: #69A6A4
    }

    .btn1 {
        background-color: #DC5716;
        color: #FFFF
    }
</style>
</html>