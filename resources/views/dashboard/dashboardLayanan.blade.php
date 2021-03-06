@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="{{route('dashboard.byTotalRespondent')}}"><p id="right-align">By Total Respondent</p></a>
            <p>Capaian SKP: <strong>{{number_format($average, 2)}}</strong>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <canvas id="myChart" height="280" width="600"></canvas>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
            <table id="layanan" class="table table-bordered table-hover">
                <th>ITSM</th>
                <th>Nama Layanan</th>
                <th>Nilai</th>
                @foreach($surveys as $survey)                    
                    <tr>
                        <td id="center-align">{{$survey->id}}</td>
                        <td><a href="{{route('layanan.per', ['layanan_id' => $survey->id])}}">{{$survey->title}}</a></td>
                        <td id="right-align">{{number_format($survey->averageScore, 2)}}</td>
                    </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ URL::to('src/js/chart-2.3.0.js') }}"></script>
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