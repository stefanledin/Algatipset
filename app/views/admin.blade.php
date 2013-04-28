@extends('master')

@section('content')
@if (! Auth::check() )

<h2>Logga in</h2>

	{{ Form::open(array('url' => 'admin/login')) }}
		<?php echo Form::token(); ?>
		<?php echo Form::label('username', 'Användarnamn'); ?>
		<?php echo Form::text('username'); ?>
		<?php echo Form::label('password', 'Lösenord'); ?>
		<?php echo Form::password('password'); ?>
	<?php echo Form::submit('Logga in'); ?>
	{{ Form::close() }}

@else

<a href="admin/logout">Logga ut</a>
<h2>Lägg till tips</h2>

<h2>Facit</h2>
<table>
	<tbody>
		<tr>
			<td><strong>Hemmalag</strong></td>
			<td><strong>Bortalag</strong></td>
			<td><strong>1</strong></td>
			<td><strong>X</strong></td>
			<td><strong>2</strong></td>
			<td><strong>-</strong></td>
		</tr>
	{{ Form::open(array('url' => 'saverow')) }}
	@for ($i = 0; $i < count($games); $i++)
		<tr>
			<td>{{ $games[$i]['Hemmalag'] }}</td>
			<td>{{ $games[$i]['Bortalag'] }}</td>
			<td><?php echo Form::radio('facit['.$i.']', '1', ($row[$i] == '1') ? true : false); ?></td>
			<td><?php echo Form::radio('facit['.$i.']', 'X', ($row[$i] == 'X') ? true : false); ?></td>
			<td><?php echo Form::radio('facit['.$i.']', '2', ($row[$i] == '2') ? true : false); ?></td>
			<td><?php echo Form::radio('facit['.$i.']', '-', ($row[$i] == '-') ? true : false); ?></td>
		</tr>
	@endfor
	</tbody>
</table>
	<?php echo Form::submit('Spara'); ?>
	{{ Form::close() }}

@endif

@stop