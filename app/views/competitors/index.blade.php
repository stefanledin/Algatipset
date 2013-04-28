@extends('master')

@section('content')
	
	<p><a href="competitors/create">Lägg till</a></p>
	@if ($competitors)
		
		@foreach ($competitors as $c)

			<?php echo '<li><a href="competitors/'.$c->id.'/edit">' . $c->name . '</a></li>' ?>

		@endforeach

	@endif

@stop