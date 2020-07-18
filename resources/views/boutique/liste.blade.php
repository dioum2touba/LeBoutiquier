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
     <th>Ville</th>
     <th>Telephone</th>
     <th>Email</th>
     <th>Boite Postal</th>
     <th>Action</th>

      @foreach($shop as $shops)
         <tr>
               <td>{{ $shops->id }}</td>
               <td>{{ $shops->nom }}</td>
               <td>{{ $shops->ville }}</td>
               <td>{{ $shops->telephone }}</td>
               <td>{{ $shops->email }}</td>
               <td>{{ $shops->boitePostal }}</td>
               <td>
                  <a href="{{ route('editBoutique',$shops->id) }}"><i class="feather icon-edit "></i>
                  <a href="{{ route('deleteBoutique',$shops->id) }}" onclick="return confirm('voulez vous supprimez cette boutique')";><i class="feather icon-trash danger"></i>  
               </td>
         </tr>
      @endforeach
  </table>
@stop