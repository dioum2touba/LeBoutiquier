@extends('layouts.main')

@section('content')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(session('success'))
                    <div class="alert alert-dismissible alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header">{{ __('Add Fiche Stock') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('storeFstock') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="codeGeneral" class="col-md-4 col-form-label text-md-right">{{ __('Date Operation') }}</label>

                            <div class="col-md-6">
                                <input id="dateOperation" type="date" class="form-control @error('dateOperation') is-invalid @enderror" name="dateOperation" value="{{ old('dateOperation') }}" required autocomplete="dateOperation" autofocus>

                                @error('dateOperation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="operation" class="col-md-4 col-form-label text-md-right">{{ __('Operation') }}</label>

                            <div class="col-md-6">
                                <input id="operation" type="text" class="form-control @error('operation') is-invalid @enderror" name="operation" value="{{ old('operation') }}" required autocomplete="operation" autofocus>

                                @error('operation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Quantite Entree') }}</label>

                            <div class="col-md-6">
                                <input id="quantiteEntree" type="number" class="form-control @error('quantiteEntree') is-invalid @enderror" name="quantiteEntree" value="{{ old('quantiteEntree') }}" required autocomplete="quantiteEntree" autofocus>

                                @error('quantiteEntree')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantiteSortie" class="col-md-4 col-form-label text-md-right">{{ __('Quantite Sortie') }}</label>

                            <div class="col-md-6">
                                <input id="quantiteSortie" type="text" class="form-control @error('quantiteSortie') is-invalid @enderror" name="quantiteSortie" value="{{ old('quantiteSortie') }}" required autocomplete="quantiteSortie" autofocus>

                                @error('quantiteSortie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="datePeremption" class="col-md-4 col-form-label text-md-right">{{ __('Date Peremption') }}</label>

                            <div class="col-md-6">
                                <input id="datePeremption" type="date" class="form-control @error('datePeremption') is-invalid @enderror" name="datePeremption" value="{{ old('datePeremption') }}" required autocomplete="datePeremption" autofocus>

                                @error('datePeremption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="prixAchat" class="col-md-4 col-form-label text-md-right">{{ __('Prix Achat') }}</label>

                            <div class="col-md-6">
                                <input id="prixAchat" type="number" class="form-control @error('prixAchat') is-invalid @enderror" name="prixAchat" value="{{ old('prixAchat') }}" required autocomplete="prixAchat" autofocus>

                                @error('prixAchat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="article_id" class="col-md-4 col-form-label text-md-right">{{ __('Choisir Article') }}</label>

                            <div class="col-md-6">
                                <select id="article_id" type="number" class="form-control @error('article_id') is-invalid @enderror" name="article_id" value="{{ old('article_id') }}" required autocomplete="article_id" autofocus>
                                    <option value="" disabled>Choisir Article</option>
                                @foreach($article as $articles)
                                    <option value="{{ $articles->id }}">{{ $articles->nom }}</option>
                                @endforeach
                                </select>

                                @error('article_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Choisir Client') }}</label>

                            <div class="col-md-6">
                                <select id="client_id" type="number" class="form-control @error('client_id') is-invalid @enderror" name="client_id" value="{{ old('client_id') }}" required autocomplete="client_id" autofocus>
                                    <option value="" disabled>Choisir Client</option>
                                @foreach($client as $clients)
                                    <option value="{{ $clients->id }}">{{ $clients->nom }}</option>
                                @endforeach
                                </select>

                                @error('client_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="boutique_id" class="col-md-4 col-form-label text-md-right">{{ __('Choisir Boutique') }}</label>

                            <div class="col-md-6">
                                <select id="boutique_id" type="number" class="form-control @error('boutique_id') is-invalid @enderror" name="boutique_id" value="{{ old('boutique_id') }}" required autocomplete="boutique_id" autofocus>
                                    <option value="" disabled>Choisir Boutique</option>
                                @foreach($boutique as $boutiques)
                                    <option value="{{ $boutiques->id }}">{{ $boutiques->nom }}</option>
                                @endforeach
                                </select>

                                @error('article_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="fournisseur_id" class="col-md-4 col-form-label text-md-right">{{ __('Choisir Fournisseur') }}</label>

                            <div class="col-md-6">
                                <select id="fournisseur_id" type="number" class="form-control @error('fournisseur_id') is-invalid @enderror" name="fournisseur_id" value="{{ old('fournisseur_id') }}" required autocomplete="fournisseur_id" autofocus>
                                    <option value="" disabled>Choisir Article</option>
                                @foreach($fournisseur as $fournisseurs)
                                    <option value="{{ $fournisseurs->id }}">{{ $fournisseurs->nom }}</option>
                                @endforeach
                                </select>

                                @error('fournisseur_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
