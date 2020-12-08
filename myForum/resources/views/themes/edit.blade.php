@extends('layouts.default')
@section('title', 'Edition du thème')

@section ('content')
    <form action="{{ route('themes.update',$theme->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="bg-light col-2 border border-dark">Titre:</div>
          <input type="text" name="name" class="col-10" value="<?= $theme->name ?>" />
        </div>
        <div class="row m-3">
            <button class="btn btn-success">Enregistrer</button>
            <a href="{{ url()->previous() }}" class="btn btn-primary">Annuler</a>
        </div>
    </form>
@endsection