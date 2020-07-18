@extends('layouts.main')

@section('content')

            @if(session('success'))
                    <div class="alert alert-dismissible alert-success">
                        {{ session('success') }}
                    </div>
                @endif
  <table class="table stripped">
     <th>#</th>
     <!-- <th>dateOperation</th> -->
     <th>operation</th>
     <!-- <th>quantiteEntree</th>
     <th>quantiteSortie</th> -->
     <th>datePeremption</th>
     <th>prixAchat</th>
     <th>article_id</th>
     <th>client_id</th>
     <th>boutique_id</th>
     <th>fournisseur_id</th>
     <th>Action</th>

      @foreach($fichier as $fichiers)
         <tr>
               <td>{{ $fichiers->id }}</td>
               <!-- <td>{{ $fichiers->dateOperation }}</td> -->
               <td>{{ $fichiers->operation }}</td>
               <!-- <td>{{ $fichiers->quantiteEntree }}</td>
               <td>{{ $fichiers->quantiteSortie }}</td> -->
               <td>{{ $fichiers->datePeremption }}</td>
               <td>{{ $fichiers->prixAchat }}</td>
               <td>{{ $fichiers->article_id }}</td>
               <td>{{ $fichiers->client_id }}</td>
               <td>{{ $fichiers->boutique_id }}</td>
               <td>{{ $fichiers->fournisseur_id }}</td>
               <td>
                  <a href="{{ route('editFstock',$fichiers->id) }}"><i class="feather icon-edit "></i>
                  <a href="{{ route('deleteFstock',$fichiers->id) }}" onclick="return confirm('voulez vous supprimez ce fichier')";><i class="feather icon-trash danger"></i>  
               </td>
         </tr>
      @endforeach
  </table>
@stop