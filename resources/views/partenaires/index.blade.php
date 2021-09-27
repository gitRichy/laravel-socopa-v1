@extends('layouts.master')

@section('title')
    Partenaires
@endsection

@section('content')

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">Partenaires</li>
                        <li class="breadcrumb-item active">Liste</li>
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
                        <form method="POST" action="{{ route('partenaires.store') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="row">
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}"
                                                placeholder="Code">
                                        </div>
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}"
                                                placeholder="Nom">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="row">
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                                                placeholder="Téléphone">
                                        </div>
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="text" class="form-control @error('cni') is-invalid @enderror" name="cni" value="{{ old('cni') }}"
                                                placeholder="N° CNI">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="row">
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}"
                                                placeholder="Type">
                                        </div>
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <select class="form-control custom-select" name="section_id">
                                                <option>-Section-</option>
                                                  
                                                    <option value="{{ $section->id }}">{{ $section->libelle }}</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="row">
                                        <div class="col-sm-12 mb-2 mb-sm-0">
                                            <input type="number" class="form-control @error('avance') is-invalid @enderror" name="avance" value="{{ old('avance') }}"
                                                placeholder="Avance">
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
                                        <th>Code</th>
                                        <th>Section</th>
                                        <th>Nom & Prénoms</th>
                                        <th>Téléphone</th>
                                        <th>Cni</th>
                                        <th>Type</th>
                                        <th>Avancement</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fournisseurs as $fournisseur)
                                        <tr>
                                            <td>{{ $fournisseur->code }}</td>
                                            <td>{{ $fournisseur->section->libelle }}</td>
                                            <td>{{ $fournisseur->nom }}</td>
                                            <td>{{ $fournisseur->phone }}</td>
                                            <td>{{ $fournisseur->cni }}</td>
                                            <td>{{ $fournisseur->type }}</td>
                                            <td>{{ $fournisseur->avance }}</td>
                                            <td class="text-right">
                                                <a type="button" href="#" class="btn btn-warning btn-circle btn-sm"><i class="la la-edit"></i></a>
                                                <form action="" method="POST" style="display: inline">
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