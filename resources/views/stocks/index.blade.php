@extends('layouts.master')

@section('title')
    | Stock
@endsection

@section('content')

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Stock</li>
                        <li class="breadcrumb-item"><a href="index.html">Situation</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Stock Statistics Widget -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-4 d-flex">
                <div class="card flex-fill dash-statistics">
                    <div class="card-body">
                        <h5 class="card-title">Stock actuel</h5>
                        <div class="stats-list">
                            <div class="stats-info">
                                <p>Total poids brute <strong>{{ $pds_brute_stock }}</strong></p>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="stats-info">
                                <p>Total nombre de sacs <strong>{{ $nbre_sacs_stock}}</strong></p>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="stats-info">
                                <p>Total poids net <strong>{{ $pds_net_stock }}</strong></p>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-8 d-flex">
                <div class="card flex-fill dash-statistics">
                    <div class="card-body">
                        <h5 class="card-title">Recherche avancée..</h5>
                        <div class="stats-list">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>			
@endsection