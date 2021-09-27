@extends('layouts.master')

@section('title')
    | Achat
@endsection

@section('content')

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">Achats</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="d-sm-flex align-items-center justify-content-end mb-4">
            <a href="#collapseOper" data-toggle="collapse" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-sm"></i> Ajouter</a>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-1">
                <div class="card collapse" id="collapseOper">
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="row">
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="number" class="form-control @error('poids_brute') is-invalid @enderror" name="poids_brute" value="{{ old('poids_brute') }}"
                                                placeholder="Poids brute">
                                        </div>
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="text" class="form-control @error('num_pesage') is-invalid @enderror" name="num_pesage" value="{{ old('num_pesage') }}"
                                                placeholder="N° Pésage">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="row">
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="number" class="form-control @error('nbre_sacs') is-invalid @enderror" name="nbre_sacs" value="{{ old('nbre_sacs') }}"
                                                placeholder="Nombre de sacs">
                                        </div>
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="text" class="form-control @error('nature_produit') is-invalid @enderror" name="nature_produit" value="{{ old('nature_produit') }}"
                                                placeholder="Nature">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="row">
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="number" class="form-control @error('poids_net') is-invalid @enderror" name="poids_net" value="{{ old('poids_net') }}"
                                                placeholder="Poids net">
                                        </div>
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <select class="form-control custom-select" name="section_id">
                                                <option>Section</option>
                                                    {{--<option value="{{ $section->id }}">{{ $section->libelle }}</option>--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="row">
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="number" class="form-control @error('prix_unit') is-invalid @enderror" name="prix_unit" value="{{ old('prix_unit') }}"
                                                placeholder="Prix unitaire">
                                        </div>
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <select class="form-control custom-select" name="fournisseur_id">
                                                <option>Fournisseur</option>
                                                    {{--@foreach ($fournisseurs as $fournisseur)
                                                        <option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }}</option>    
                                                    @endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-1">
                                    <button type="submit" class="btn btn-warning btn-block">
                                        Enregistrer
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