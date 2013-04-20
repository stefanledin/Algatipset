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

<h2>Lägg till tips</h2>
<a href="admin/logout">Logga ut</a>

@endif

<h2>Facit</h2>
/*
Facit goes here... 
 */