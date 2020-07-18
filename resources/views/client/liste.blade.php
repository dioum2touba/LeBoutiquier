@extends('layouts.main')

@section('content')

            @if(session('success'))
                    <div class="alert alert-dismissible alert-success">
                        {{ session('success') }}
                    </div>
                @endif
  <table class="table stripped">
     <th>#</th>
     <th>Nom</th>
     <th>Prenom</th>
     <th>Ville</th>
     <th>Telephone</th>
     <th>Email</th>
     <th>Boite Postal</th>
     <th>Action</th>

      @foreach($client as $clients)
         <tr>
               <td>{{ $clients->id }}</td>
               <td>{{ $clients->nom }}</td>
               <td>{{ $clients->prenom }}</td>
               <td>{{ $clients->ville }}</td>
               <td>{{ $clients->telephone }}</td>
               <td>{{ $clients->email }}</td>
               <td>{{ $clients->boitePostal }}</td>
               <td>
                  <a href="{{ route('editClient',$clients->id) }}"><i class="feather icon-edit "></i>
                  <a href="{{ route('deleteClient',$clients->id) }}" onclick="return confirm('voulez vous supprimez ce client')";><i class="feather icon-trash danger"></i>  
               </td>
         </tr>
      @endforeach
  </table>
@stop