@extends('layouts.main')

@section('content')

            @if(session('success'))
                    <div class="alert alert-dismissible alert-success">
                        {{ session('success') }}
                    </div>
                @endif
  <table class="table stripped">
     <th>#</th>
     <th>codeGeneral</th>
     <th>codeBare</th>
     <th>nom</th>
     <th>conditionnement</th>
     <th>stockMin</th>
     <th>quantite</th>
     <th>Action</th>

      @foreach($article as $articles)
         <tr>
               <td>{{ $articles->id }}</td>
               <td>{{ $articles->codeGeneral }}</td>
               <td>{{ $articles->codeBare }}</td>
               <td>{{ $articles->nom }}</td>
               <td>{{ $articles->conditionnement }}</td>
               <td>{{ $articles->stockMin }}</td>
               <td>{{ $articles->quantite }}</td>
               <td>
                  <a href="{{ route('editArticle',$articles->id) }}"><i class="feather icon-edit "></i>
                  <a href="{{ route('deleteArticle',$articles->id) }}" onclick="return confirm('voulez vous supprimez cette article')";><i class="feather icon-trash danger"></i>  
               </td>
         </tr>
      @endforeach
  </table>
@stop