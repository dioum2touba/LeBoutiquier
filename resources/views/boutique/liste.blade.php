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
                                <h4 class="card-title">Liste Boutiques</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>                                     
                                            <tr>
                                                <th>#</th>
                                                <th>Nom</th>
                                                <th>Ville</th>
                                                <th>Telephone</th>
                                                <th>Email</th>
                                                <th>Boite Postal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      @stop