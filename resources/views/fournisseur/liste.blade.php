
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
                                <h4 class="card-title">Liste Fournisseurs</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>                                     
                                            <tr>
                                                <th>#</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Ville</th>
                                                <th>Telephone</th>
                                                <th>Email</th>
                                                <th>Boite Postal</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($fournisseur as $fournisseurs)
                                             <tr>
                                                   <td>{{ $fournisseurs->id }}</td>
                                                   <td>{{ $fournisseurs->nom }}</td>
                                                   <td>{{ $fournisseurs->prenom }}</td>
                                                   <td>{{ $fournisseurs->ville }}</td>
                                                   <td>{{ $fournisseurs->telephone }}</td>
                                                   <td>{{ $fournisseurs->email }}</td>
                                                   <td>{{ $fournisseurs->boitePostal }}</td>
                                                   <td>
                                                      <a href="{{ route('editClient',$fournisseurs->id) }}"><i class="feather icon-edit "></i>
                                                      <a href="{{ route('deleteClient',$fournisseurs->id) }}" onclick="return confirm('voulez vous supprimez ce fournisseur')";><i class="feather icon-trash danger"></i>  
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