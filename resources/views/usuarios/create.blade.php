<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agregar usuario</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/css/admin/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="/css/app.css" rel="stylesheet">
  
  <script src="/vendor/jquery/jquery.min.js"></script>
  
</head> 

<body style="font: serif">
      <main>
         <!-- Main Content -->
    <div class="container">
       
                <p > Agregar un nuevo usuario</p>
                <form  name=tuformulario method="POST" action= {{route('TestController.store')}}>
                    {{ csrf_field() }}
                <div class="control-group">
                    <div class="form-group controls">
                    <label style="font-size: 14px" >UserId</label>
                    <input type="number" step="1" min="0"   class="form-control" name="userid" id="userid"  required>
                    @error('inputretefue')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group controls">
                        <label style="font-size: 14px" >Id</label>
                        <input type="number" step="1" min="0"   class="form-control" name="id" id="id"  required>
                        @error('inputretefue')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                </div>
                <div class="control-group">
                    <div class="form-group controls">
                        <label style="font-size: 14px" >Title</label>
                        <input type="text"   class="form-control" name="title" id="title"  required>
                        @error('inputretefue')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                </div>  
                <div class="control-group">
                    <div class="form-group controls">
                        <label style="font-size: 14px" >Completed</label>
                        <input type="checkbox" id="completed1" name="completed" value="True">
                            <label for="completed1"> True</label><br>
                        <input type="checkbox" id="completed2" name="completed" value="False">
                            <label for="completed2"> False</label><br>
                        @error('inputretefue')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                </div>  
                    <br>
                    <button class="btn btn-sm btn-primary fa , lang"  onclick="pregunta()"  key="bnenviar" >Enviar</button>           
                </form>
             </div>
        </div>
      </div>
    </main>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for this template -->
    </body>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
 </html>
    