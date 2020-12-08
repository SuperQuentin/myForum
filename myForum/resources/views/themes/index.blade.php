@extends('layouts.default')
@section('title', 'Liste des thèmes')
@section('content')
  @if (session('message'))
  <div class="alert alert-warning" role="alert">
    {{ session('message') }}
  </div>  
  @endif

  <h1>Themes</h1>

  @forelse ($collection as $item)
  <div class="row text-center divtitle" data-id="{{ $item->id }}">
    <div class="col-2 text-right">
      <div id="divIcons{{ $item->id }}" class="d-none">
        <a class="blacklink m-2" href="{{ route('themes.show',$item->id) }}"><i class="fas fa-search-plus"></i></a>
      </div>
    </div>
    <div class="col-10 text-left">
      {{ $item->name }}
    </div>
  </div>
  @empty
  <p>Aucun info est disponible</p>
  @endforelse

  <div class="row m-3">
    <a href="{{ route('themes.create') }}" class="btn btn-primary">Ajouter</a>
  </div>
  <script> 
    // JS code specific to the reference list page
    // Author: XCL
    // Date Oct 20

    titles = document.getElementsByClassName("divtitle")
    for (i = 0; i < titles.length; i++) {
        titles[i].addEventListener('mouseover', function() {
            document.getElementById('divIcons'+this.dataset.id).classList.remove('d-none')
        })
        titles[i].addEventListener('mouseout', function() {
            document.getElementById('divIcons'+this.dataset.id).classList.add('d-none')
        })
    }
  </script>
@endsection