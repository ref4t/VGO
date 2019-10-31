@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<H1>Welcome</H1>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #FD9680
}
</style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop