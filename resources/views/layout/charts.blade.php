@extends('dashboard')

@section('content')
    <div class="main-panel" style="overflow: scroll; height: 100vh;">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card" style="background-color: #ffffff">
                        <div class="card-body">
                            <h4 class="card-title">Bar chart</h4>
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card" style="background-color: #ffffff">
                        <div class="card-body">
                            <h4 class="card-title">Doughnut chart</h4>
                            <canvas id="doughnutChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin grid-margin-lg-0">
                    <div class="card" style="background-color: #ffffff">
                        <div class="card-body">
                            <h4 class="card-title">Pie chart</h4>
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
