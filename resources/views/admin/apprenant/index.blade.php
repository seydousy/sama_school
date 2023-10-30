@extends('admin.admin')

@section('title','Tous Les Apprenants')

@section('content')

      <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.apprenant.create') }}" class="btn btn-primary">Ajouter un Apprenant</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour</a>
      </div>

      <table class="table table-striped">
        <thead>
            <th>Identifiant</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Status</th>
            <th class="text-end">Action</th>
        </thead>
        <tbody>
            @foreach ($apprenants as $apprenant)
            <tr>
                <td>{{$apprenant->id}}</td>
                <td>{{$apprenant->firstname}}</td>
                <td>{{$apprenant->lastname}}</td>
                <td>{{$apprenant->email}}</td>
                <td>@if ($apprenant->archived == 1)
                    Archivé
                @else
                    Non-archivé
                @endif
            </td>
            <td>
                <div class="d-flex gap-2 w-100 justify-content-end">
                    <a href="{{ route('admin.apprenant.edit',$apprenant) }}" class="btn btn-primary">Editer</a>
                    <form action="{{ route('admin.apprenant.destroy',$apprenant) }}" method="POST">
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
      {{$apprenants->Links()}}
    
@endsection