@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p>Capaian SKP: <strong>{{$average}}</strong>

            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <canvas id="myChart" height="280" width="600"></canvas>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
            <table id="layanan" class="table table-bordered table-hover">
                <th>Nomor</th>
                <th>Layanan</th>
                <th>Nilai</th>
                @foreach($surveys as $survey)                    
                    <tr>
                        <td id="center-align">{{$survey->id}}</td>
                        <td><a href="#">{{$survey->title}}</a></td>
                        <td id="right-align">{{$survey->averageScore}}</td>
                    </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
    <script>
        var labels=<?php echo $labelsid; ?>, data=<?php echo $data; ?>;
        
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Nilai Rata-rata',
                    backgroundColor: "rgba(0, 102, 255, 0.5)",
                    data:data
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Capaian Survey Kepuasan Pengguna'
                },
            }
        });
    </script>
@endsection