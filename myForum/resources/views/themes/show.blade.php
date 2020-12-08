@extends('layouts.default')
@section('title', 'Thème n°' . $theme->id)

@section ('content')
  <h1 class="text-center p-5">Show Theme</h1>
  <div>
    <div class="row">
      <div class="bg-light col-2 border border-dark">Titre:</div>
      <div class="bg-light col-2 border border-dark">{{ $theme->name }}</div>
    </div>
  </div>
@endsection