
@extends('layouts.main')

@section('content')

            @if(session('success'))
                    <div class="alert alert-dismissible alert-success">
                        {{ session('success') }}
                    </div>
                @endif
 

 <!-- Hoverable rows start -->
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste Articles</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>                                     
                                            <tr>
                                                <th>#</th>
                                                   <th>Code General</th>
                                                   <th>Code Bare</th>
                                                   <th>Nom</th>
                                                   <th>Conditionnement</th>
                                                   <th>Stock Minimum</th>
                                                   <th>Quantite</th>
                                                   <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      @stop