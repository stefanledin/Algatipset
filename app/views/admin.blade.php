@extends('master')


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
		</tr>
	{{ Form::open(array('url' => '/')) }}
	@for ($i = 0; $i < count($games); $i++)
		<tr>
			<td>{{ $games[$i]['Hemmalag'] }}</td>
			<td>{{ $games[$i]['Bortalag'] }}</td>
			<td><?php echo Form::radio('', '1'); ?></td>
			<td><?php echo Form::radio('', 'X'); ?></td>
			<td><?php echo Form::radio('', '2'); ?></td>
		</tr>
	@endfor
	{{ Form::close() }}
	</tbody>
</table>

@endif
