@extends('admin.admin')
@section('title', $apprenant->exists ? "Editer un apprenant" : "Creer un apprenant")

@section('content')
        <h1>@yield('title')</h1>
        <form class="vstack gap-2" action="{{route($apprenant->exists ? 'admin.apprenant.update' : 'admin.apprenant.store', $apprenant) }}"
            method="POST">
            @csrf
            @method($apprenant->exists ? 'PUT' : 'POST')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prenom:</strong>
                        <input type="text" name="firstname" class="form-control" placeholder="Moussa" value="{{ old('firstname', $apprenant->name) }}">
                            @error('firstname')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nom:</strong>
                        <input type="text" name="lastname" class="form-control" placeholder="Moussa" value="{{ old('lastname', $apprenant->name) }}">
                            @error('lastname')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Adresse Email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="moussa@gmail.com" value="{{ old('email', $apprenant->email) }}">
                        @error('email')
                           <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" placeholder="Password" value="{{old( 'password', $apprenant->password)}}">
                        @error('password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                       @include('shared.checkbox', ['label' => 'Archivé', 'name' => 'archived', 'value' => $apprenant->archived])
                <div>
                    <button class="btn btn-primary ml-3">
                        @if ($apprenant->exists)
                          Modifier    
                        @else
                          Creer   
                        @endif
                    </button>
                </div>
            </div>
        </form>
    
@endsection