@extends('layouts.master')

@section('title')
    | Liste Fournisseurs
@endsection

@section('content')

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">Fournisseurs</li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="d-sm-flex align-items-center justify-content-end mb-4">
            <a href="#collapseOper" data-toggle="collapse" class="btn btn-warning"><i class="la la-plus"></i></a>
        </div>

        
        <div class="container">  
            <div class="card collapse" id="collapseOper">
                <div class="card-body">
                    <form method="POST" action="{{ route('fournisseurs.store') }}">
                        @csrf
                        <div class="form-group row">
                            
                                    <div class="col-xl-6 mb-2 mb-sm-0">
                                        <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}"
                                            placeholder="Code">
                                    </div>
                                    <div class="col-xl-6 mb-2 mb-sm-0">
                                        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}"
                                            placeholder="Nom">
                                    </div>
                                
                        </div>
                        <div class="form-group row">
                            
                                    <div class="col-xl-6 mb-2 mb-sm-0">
                                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                                            placeholder="Téléphone">
                                    </div>
                                    <div class="col-xl-6 mb-2 mb-sm-0">
                                        <input type="text" class="form-control @error('cni') is-invalid @enderror" name="cni" value="{{ old('cni') }}"
                                            placeholder="N° CNI">
                                    </div>
                                
                        </div>
                        <div class="form-group row">
                            
                                    <div class="col-xl-12 mb-2 mb-sm-0">
                                        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}"
                                            placeholder="Type fournisseur (delegue ou planteur)">
                                    </div>
                                
                        </div>
                        <div class="form-group row">
                            
                                    <div class="col-xl-12 mb-2 mb-sm-0">
                                        <input type="hidden" name="section_id" value="{{$section->id}}">
                                    </div>
                                
                        </div>
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2 mb-2 mb-sm-0">
                                <button type="submit" class="btn btn-warning btn-block">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            
        

        <div class="container">
            @if (session()->has('success'))
                <div class="alert alert-success mt-1">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped mb-0 datatable" cellspacing="0" style="font-size: 0.8em;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Nom & Prénoms</th>
                                        <th>Téléphone</th>
                                        <th>Cni</th>
                                        <th>Type</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($section->fournisseurs as $fournisseur)
                                        <tr>
                                            <td>{{ $fournisseur->code }}</td>
                                            <td>{{ $fournisseur->nom }}</td>
                                            <td>{{ $fournisseur->phone }}</td>
                                            <td>{{ $fournisseur->cni }}</td>
                                            <td><span class="{{ $fournisseur->type == 'Paysan' ? 'badge bg-inverse-info' : 'badge bg-inverse-success'}}" style="font-size: 0.9em">{{ $fournisseur->type}}</span></td>
                                            <td class="text-right">
                                                <a type="button" data-toggle="modal" data-target="#edit_fourn{{$fournisseur->id}}"><i class="la la-edit" style="font-size: 16px"></i></a>
                                                <a type="button" data-toggle="modal" data-target="#delete_fourn{{$fournisseur->id}}"><i class="la la-trash" style="font-size: 16px"></i></a>
                                            </td>
                                            <!-- Edit Fournisseur Modal -->
                                            <div id="edit_fourn{{$fournisseur->id}}" class="modal custom-modal fade" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5>Modifier les informations de -> <span class="badge bg-dark text-white py-2">{{$fournisseur->nom}}</span></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('fournisseurs.update',$fournisseur->id) }}" method="POST">
                                                                @csrf
                                                                @method('PACTH')
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}"
                                                                            placeholder="Code">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}"
                                                                            placeholder="Nom">
                                                                    </div>   
                                                                </div>

                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                                                                            placeholder="Telephone">  
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control @error('cni') is-invalid @enderror" name="cni" value="{{ old('cni') }}"
                                                                            placeholder="N° CNI">
                                                                    </div>   
                                                                </div>
                                                                
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}"
                                                                            placeholder="Type">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <select class="form-control custom-select" name="section_id">
                                                                            <option>-Section-</option>
                                                                                <option value="{{ $section->id }}">{{ $section->libelle }}</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="number" class="form-control @error('avance') is-invalid @enderror" name="avance" value="{{ old('avance') }}"
                                                                        placeholder="Avance">
                                                                </div>
                                                                <div class="submit-section">
                                                                    <button type="submit" class="btn btn-outline-warning">Modifier</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Edit Modal -->

                                            <!-- Delete Fournisseur Modal -->
                                            
                                                <div class="modal custom-modal fade" id="delete_fourn{{$fournisseur->id}}" role="dialog">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="form-header">
                                                                    <h3><span class="badge badge-dark text-white">{{$fournisseur->nom}}</span></h3>
                                                                    <p>Voulez vous vraiment supprimer ce Fournisseur?</p>
                                                                </div>
                                                                <div class="modal-btn delete-action">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <button type="button" data-dismiss="modal" class="btn btn-block btn-outline-warning rounded-pill">Non</button>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <form action="{{ route('fournisseurs.destroy',$fournisseur->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-block btn-outline-warning rounded-pill">Oui</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            
                                            <!-- /Delete Modal -->
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