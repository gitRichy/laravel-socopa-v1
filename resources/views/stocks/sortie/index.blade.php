@extends('layouts.master')

@section('title')
    | Sorties Stock
@endsection

@section('content')

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Stock</li>
                        <li class="breadcrumb-item"><a href="index.html">Sorties</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="d-sm-flex align-items-center justify-content-end mb-4">
            <a href="#collapseOper" data-toggle="collapse" class="btn btn-warning"><i class="la la-plus"></i></a>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-1">
                <div class="card collapse" id="collapseOper">
                    <div class="card-body">
                        <form method="POST" action="{{ route('sorties.store') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="row">
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="number" class="form-control @error('poids_brute') is-invalid @enderror" name="poids_brute" value="{{ old('poids_brute') }}"
                                                placeholder="Poids brute">
                                        </div>
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="text" class="form-control @error('num_connaiss') is-invalid @enderror" name="num_connaiss" value="{{ old('num_connaiss') }}"
                                                placeholder="N° Connaissement">
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
                                                    <option value="{{ $section->id }}">{{ $section->libelle }}</option>
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
                                            <select class="form-control custom-select" name="partenaire_id">
                                                <option>Partenaire</option>
                                                    @foreach ($partenaires as $partenaire)
                                                        <option value="{{ $partenaire->id }}">{{ $partenaire->denomination }}</option>    
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-1">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-0">
                    <div class="card-header">
                        <h4 class="card-title mb-0"></h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped mb-0" cellspacing="0" style="font-size: 0.8em;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Date Sortie</th>
                                        <th>N° Connaissement</th>
                                        <th>Partenaire</th>
                                        <th>Pds Brute</th>
                                        <th>Nbre Sacs</th>
                                        <th>Pds Net</th>
                                        <th>Prix unitaire</th>
                                        <th>Nature</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sorties as $sortie)
                                        <tr>
                                            <td>{{ $sortie->created_at }}</td>
                                            <td>{{ $sortie->num_connaiss}}</td>
                                            <td>{{ $sortie->partenaire->denomination }}</td>
                                            <td>{{ $sortie->poids_brute }}</td>
                                            <td>{{ $sortie->nbre_sacs }}</td>
                                            <td>{{ $sortie->poids_net }}</td>
                                            <td>{{ $sortie->prix_unit }}</td>
                                            <td>{{ $sortie->nature_produit }}</td>
                                            <td class="text-right">
                                                <a type="button" href="{{ route('sorties.edit',[$sortie->id]) }}" class="btn btn-warning btn-circle btn-sm"><i class="la la-edit"></i></a>
                                                <form action="{{ route('sorties.destroy',[$sortie->id]) }}" method="POST" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="la la-trash"></i></button>
                                                </form>
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
    
    </div>			
@endsection