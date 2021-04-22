<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Prueba</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <!--<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>-->

  <!-- Custom styles for this template -->
  <link href="/css/app.css" rel="stylesheet">
  
</head>

<body style="font: serif">
    <div class="container">
          <h1>Usuario</h1>

         <h3>Id: {{$usuario->id}} </h3>
         <h3>Title: {{$usuario->title}} </h3>
         <h3>Completed: @if ($usuario->completed == True)True @else False @endif</td> </h3>
    </div>
                    
      </div>
   
        <div class="container">
        <footer>
            <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                <li class="list-inline-item">
                </li>
                </ul>
                <p class="copyright " >Copyright &copy; Prueba 2021</p>
            </div>
            </div>
        </footer>
        </div>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>

</html>
