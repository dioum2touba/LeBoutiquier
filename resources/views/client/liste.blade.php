
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
                                <h4 class="card-title">Liste Clients</h4>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      @stop