@extends('admin.admin')

@section('title','Tous Les Professeurs')

@section('content')

      <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.professeur.create') }}" class="btn btn-primary">Ajouter un Professeur</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
      </div>

      <table class="table table-striped">
        <thead>
            <th>Identifiant</th>
            <th>Nom Complet</th>
            <th>Email</th>
            <th>Status</th>
            <th class="text-end">Action</th>
        </thead>
        <tbody>
            @foreach ($professeurs as $professeur)
            <tr>
                <td>{{$professeur->id}}</td>
                <td>{{$professeur->name}}</td>
                <td>{{$professeur->email}}</td>
                <td>@if ($professeur->archived == 1)
                    Archivé
                @else
                    Non-archivé
                @endif
            </td>
            <td>
                <div class="d-flex gap-2 w-100 justify-content-end">
                    <a href="{{ route('admin.professeur.edit',$professeur) }}" class="btn btn-primary">Editer</a>
                    <form action="{{ route('admin.professeur.destroy',$professeur) }}" method="POST">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
      {{$professeurs->Links()}}
    
@endsection