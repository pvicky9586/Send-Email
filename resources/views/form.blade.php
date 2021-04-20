<!DOCTYPE html>
<html>
 <head>
  <title>How Send an Email in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
      }

      .full-height {
          height: 100vh;
      } 

      .content {
          text-align: center;
      }

      .title {
          font-size: 84px;
      } 
  </style>
 </head>
 <body>
  <br />
  <br />
  <br />
  <div class="container box" style="width: 970px;">
   <h3 align="center">Cómo enviar un correo electrónico en Laravel</h3>
      @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
   </div>
   @endif

   <form method="post" action="{{url('send')}}">
    {{ csrf_field() }}
      <div class="form-group">
       <label>Nombre</label>
       <input type="text" name="name" class="form-control" value="" />
      </div>

    <div class="form-group">
     <label> Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>

    <div class="form-group">
     <label>Mensaje</label>
     <textarea name="message" class="form-control"></textarea>
    </div>

    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Enviar" />
    </div>

   </form>

  </div>


 </body>
</html>