@extends('layouts.master')

@section('title')
    | Suivis
@endsection

@section('content')

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header mb-5">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">Fournisseurs</li>
                        <li class="breadcrumb-item active">Suivis</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-group m-b-30">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <span class="d-block">Fournisseurs</span>
                                </div>
                            </div>
                            <h3 class="mb-3 text-right">@isset($four_sec){{ $four_sec }}@endisset</h3>
                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <span class="d-block">Delegues</span>
                                </div>
                            </div>
                            <h3 class="mb-3 text-right">@isset($deleg_sec){{ $deleg_sec }}@endisset</h3>
                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <span class="d-block">Paysans</span>
                                </div>
                            </div>
                            <h3 class="mb-3 text-right">@isset($plant_sec){{ $plant_sec }}@endisset</h3>
                        </div>
                    </div>
                
                </div>
            </div>	
        </div>

        <div>
            @if (session()->has('success'))
                <div class="alert alert-success mt-1">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>

        <!-- Search Filter -->

        <p>Critère de recherche selon le type de Fournisseur</p>

        <form action="{{ route('fournisseurs.search') }}" method="GET">
            @csrf
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-6 col-12">  
                    <div class="form-group">
                        <input type="text" class="form-control" name="tf" placeholder="[Paysan | Delegue]">  
                    </div>
                </div>
                {{--<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
                    <div class="form-group">
                        <select class="form-control select"> 
                            <option>-----</option>
                            <option> Pending </option>
                            <option> Approved </option>
                            <option> Returned </option>
                        </select>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
                    <div class="form-group">
                        <div class="cal-icon">
                            <input class="form-control datetimepicker" type="text">
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
                    <div class="form-group">
                        <div class="cal-icon">
                            <input class="form-control datetimepicker" type="text">
                        </div>
                    </div>
                </div>--}}
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-6 col-12">  
                    <button type="submit" class="btn btn-warning py-2">Rechercher</button>  
                </div>     
            </div>
        </form>
        <!-- /Search Filter -->

        <p class="my-4">Résultat de recherche pour:
            @isset($key)
                <small class="badge bagde-pill badge-warning">
                    {{$key}}
                </small>
            @endisset
        </p>
        
        <div class="row">
            <div class="col-sm-12 mt-3">
                <div class="card mb-0">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped datatable mb-0" cellspacing="0" style="font-size: 0.8em;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Nom & Prénoms</th>
                                        <th>Téléphone</th>
                                        <th>Cni</th>
                                        <th>Avancement</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($fournisseurs)
                                        @foreach($fournisseurs as $fournisseur)
                                        <tr>
                                            <td>{{$fournisseur->code}}</td>
                                            <td>{{$fournisseur->nom}}</td>
                                            <td>{{$fournisseur->phone}}</td>
                                            <td>{{$fournisseur->cni}}</td>
                                            <td>{{$fournisseur->avance}}</td>
                                        </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    			
@endsection