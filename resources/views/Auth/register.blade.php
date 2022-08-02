<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card back1 text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Registrar Usuario</h2>
                   <form action="{{route('userRegister.register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-outline form-white mb-4 mt-5">
                      <input type="text" id="typeEmailX" class="form-control form-control-lg" name="name" />
                      <label class="form-label" for="typeEmailX">Nombre</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                        <input type="file"  class="form-control form-control-lg" name="avatar" />
                        <label class="form-label" for="typeEmailX">Avatar</label>
                      </div>

                    <div class="form-outline form-white mb-4">
                        <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email"/>
                        <label class="form-label" for="typeEmailX">Correo</label>
                      </div>
      
                    <div class="form-outline form-white mb-4">
                      <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                      <label class="form-label" for="typePasswordX">Contraseña</label>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
   
                      <button class="btn  btn1 btn-lg px-5" type="submit">Registrar</button>
                    </div>
                   </form>
                  </div>
      
                  <div>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
     </section>
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

<style>
  .back1{
    background-color: #69A6A4
  }
  .btn1{
    background-color: #DC5716;
    color: #FFFF
  }
</style>
</html>