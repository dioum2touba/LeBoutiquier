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
                                <h4 class="card-title">Liste Fiches Stocks</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>                                     
                                            <tr>
                                               <th>#</th>
                                                <!-- <th>dateOperation</th> -->
                                                <th>Operation</th>
                                                <!-- <th>quantiteEntree</th>
                                                <th>quantiteSortie</th> -->
                                                <th>Date Peremption</th>
                                                <th>Prix Achat</th>
                                                <th>Article_id</th>
                                                <th>Client_id</th>
                                                <th>Boutique_id</th>
                                                <th>Bournisseur_id</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hoverable rows end -->
@stop