@extends('admin.admin')

@section('title','Tous Les Cours')

@section('content')

      <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.cour.create') }}" class="btn btn-primary">Ajouter un Cour</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
      </div>

      <table class="table table-striped">
        <thead>
            <th>Identifiant</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Status</th>
            <th class="text-end">Action</th>
        </thead>
        <tbody>
            @foreach ($cours as $cour)
            <tr>
                <td>{{$cour->id}}</td>
                <td>{{$cour->title}}</td>
                <td>{{$cour->description}}</td>
                <td>@if ($cour->archived == 1)
                    Archivé
                @else
                    Non-archivé
                @endif
            </td>
            <td>
                <div class="d-flex gap-2 w-100 justify-content-end">
                    <a href="{{ route('admin.cour.edit',$cour) }}" class="btn btn-primary">Editer</a>
                    <form action="{{ route('admin.cour.destroy',$cour) }}" method="POST">
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
      {{$cours->Links()}}
    
@endsection