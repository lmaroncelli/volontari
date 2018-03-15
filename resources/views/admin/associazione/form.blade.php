@extends('layouts.app')


@section('briciole')
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  @if ($asso->exists)
	  	<h1>Modifica Associazione</h1>
	  @else
	  	<h1>Crea Nuova Associazione</h1>
	  @endif
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Top</a></li>
	    <li class="active">Associazioni</li>
	  </ol>
	</section>
@endsection


@section('content')
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
	        <form role="form" action="{{ route('associazioni.store') }}" method="POST">
	        	{!! csrf_field() !!}
				<div class="box-body">
					<div class="form-group">
					  <label for="nome">Nome</label>
					  <input type="nome" class="form-control" name="nome" id="nome" placeholder="nome" value="{{$asso->nome}}">
					</div>
				</div> <!-- /.box-body -->
				<div class="box-footer">
				<button type="submit" class="btn btn-primary">Crea</button>
				</div>
        	</form>
      	</div> <!-- /.box -->
      </div><!-- /.col -->
     </div> <!-- /.row -->
@endsection
