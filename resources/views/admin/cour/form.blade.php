@extends('admin.admin')
@section('title', $cour->exists ? "Editer un cour" : "Creer un cour")

@section('content')
        <h1>@yield('title')</h1>
        <form class="vstack gap-2" action="{{route($cour->exists ? 'admin.cour.update' : 'admin.cour.store', $cour) }}"
            method="POST">
            @csrf
            @method($cour->exists ? 'PUT' : 'POST')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Titre:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Maths" value="{{ old('title', $cour->title) }}">
                            @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea name="description" class="form-control">{{ old('description', $cour->description) }}</textarea>
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                
                       @include('shared.checkbox', ['label' => 'Archivé', 'name' => 'archived', 'value' => $cour->archived])
                <div>
                    <button class="btn btn-primary ml-3">
                        @if ($cour->exists)
                          Modifier    
                        @else
                          Creer   
                        @endif
                    </button>
                </div>
            </div>
        </form>
    
@endsection