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
                <div class="card-header">{{ __('Edit Article') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateArticle',$article->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="codeGeneral" class="col-md-4 col-form-label text-md-right">{{ __('Code General') }}</label>

                            <div class="col-md-6">
                                <input id="codeGeneral" type="text" class="form-control @error('codeGeneral') is-invalid @enderror" name="codeGeneral" value="{{ $article->codeGeneral }}" required autocomplete="codeGeneral" autofocus>

                                @error('codeGeneral')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="codeBare" class="col-md-4 col-form-label text-md-right">{{ __('Code Bare') }}</label>

                            <div class="col-md-6">
                                <input id="codeBare" type="text" class="form-control @error('codeBare') is-invalid @enderror" name="codeBare" value="{{ $article->codeBare }}" required autocomplete="codeBare" autofocus>

                                @error('codeBare')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $article->nom }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="conditionnement" class="col-md-4 col-form-label text-md-right">{{ __('Conditionnement') }}</label>

                            <div class="col-md-6">
                                <input id="conditionnement" type="text" class="form-control @error('conditionnement') is-invalid @enderror" name="conditionnement" value="{{ $article->conditionnement }}" required autocomplete="conditionnement" autofocus>

                                @error('conditionnement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="stockMin" class="col-md-4 col-form-label text-md-right">{{ __('stock Minimum') }}</label>

                            <div class="col-md-6">
                                <input id="stockMin" type="number" class="form-control @error('stockMin') is-invalid @enderror" name="stockMin" value="{{ $article->stockMin }}" required autocomplete="stockMin" autofocus>

                                @error('stockMin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="quantite" class="col-md-4 col-form-label text-md-right">{{ __('Quantite') }}</label>

                            <div class="col-md-6">
                                <input id="quantite" type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ $article->quantite }}" required autocomplete="quantite" autofocus>

                                @error('quantite')
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
