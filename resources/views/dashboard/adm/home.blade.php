@extends('dashboard')
@section('content')

<div class="container-fluid" id="dashboard-content">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="display-6">Dashboard</h1>
            </div>
            <div>
                <canvas id="myChart" class="mw-100 py-5"></canvas>
            </div>
            <div class="row my-5">
                {{-- <div class="col-lg-4">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="card-title text-uppercase mb-0">Categoria mais visitada</span>
                                    <strong class="font-weight-bold mb-0">Moda</strong>
                                </div>
                                <div class="col-auto">
                                    <span>350,897</span>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Desde o último mês</span>
                            </p>
                        </div>
                    </div>
                </div> --}}
                <div class="row align-items-md-stretch">
                    <div class="col-md-6 h-100 p-5 card-dashboard border rounded-3">
                        <h4>Categoria mais visitada</h4>
                        <span class="h2 font-weight-bold mb-0">Moda</span>
                        <div class="col-auto">
                            <span>350,897</span>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <small>Desde o último mês</small>
                        </p>
                    </div>
                    <div class="col-md-6 h-100 p-5 card-dashboard border rounded-3">
                        <h4>Categoria mais visitada</h4>
                        <span class="h2 font-weight-bold mb-0">Moda</span>
                        <div class="col-auto">
                            <span>350,897</span>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <small>Desde o último mês</small>
                        </p>
                    </div>
                </div>
                
            </div>
    </div>
    </main>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@endsection


