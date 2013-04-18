@extends('master')

<h2>Lägg till tips</h2>
{{ Form::open(array('route' => 'test')) }}
   <?php echo Form::label('name', 'Namn'); ?>
   <?php echo Form::text('name'); ?>
   <?php echo Form::label('phone', 'Telefonnummer'); ?>
   <?php echo Form::text('phone'); ?>
{{ Form::close() }}

<h2>Facit</h2>
/*
Facit goes here... 
 */