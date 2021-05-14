@extends('layout')
@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h3  class="text-center display-4 text-primary">Send Email </h3><small>Envio por get</small>
			<form action="{{route('seend')}}" method="get">
				<input type="text" name="name" placeholder="Nombre" class="form-control"><br>
				<textarea  name="message" placeholder="Mensaje" class="form-control"></textarea><br>
				<input type="email" name="email" placeholder="Email" class="form-control"  autocomplete="on"> 
				<br><br>
				<button type="submit" class="btn btn-success btn.block">Enviar</button>
			</form>
			 
   
        </div>
    </div>
</div>
@endsection 