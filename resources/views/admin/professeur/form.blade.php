@extends('admin.admin')
@section('title', $professeur->exists ? "Editer un professeur" : "Creer un professeur")

@section('content')
        <h1>@yield('title')</h1>
        <form class="vstack gap-2" action="{{route($professeur->exists ? 'admin.professeur.update' : 'admin.professeur.store', $professeur) }}"
            method="POST">
            @csrf
            @method($professeur->exists ? 'PUT' : 'POST')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nom Complet:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Diop" value="{{ old('name', $professeur->name) }}">
                            @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Adresse Email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="moussa@gmail.com" value="{{ old('email', $professeur->email) }}">
                        @error('email')
                           <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                       @include('shared.checkbox', ['label' => 'Archivé', 'name' => 'archived', 'value' => $professeur->archived])
                <div>
                    <button class="btn btn-primary ml-3">
                        @if ($professeur->exists)
                          Modifier    
                        @else
                          Creer   
                        @endif
                    </button>
                </div>
            </div>
        </form>
    
@endsection