@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>
<h2>{{ $exception->getMessage() }}</h2>
error 404
<div class="puntoFooter"></div>
@endsection