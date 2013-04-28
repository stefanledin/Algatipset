@extends('master')

@section('content')
<?php
	echo Form::open(array('url' => 'competitors'));
		
		echo Form::token();?>

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
			@for ($i = 0; $i < count($games); $i++)
				<tr>
					<td>{{ $games[$i]['Hemmalag'] }}</td>
					<td>{{ $games[$i]['Bortalag'] }}</td>
					<td><?php echo Form::radio('row['.$i.']', '1'); ?></td>
					<td><?php echo Form::radio('row['.$i.']', 'X'); ?></td>
					<td><?php echo Form::radio('row['.$i.']', '2'); ?></td>
				</tr>
			@endfor
			</tbody>
		</table>

		<?php 
		echo Form::label('name', 'Namn');
		echo Form::text('name');

		echo Form::label('phone', 'Telefonnummer');
		echo Form::text('phone');

		echo Form::label('goals', 'Antal mål');

		echo Form::text('goals');

		echo Form::label('sponsoring', 'Sponsrar med en krona per mål.');
		echo Form::checkbox('sponsoring', true);

		echo Form::submit('Spara');

	echo Form::close();
?>
@stop