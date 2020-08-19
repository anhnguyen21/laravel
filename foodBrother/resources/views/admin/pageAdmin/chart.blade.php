@extends('../../admin/masterAdmin');
@section('content');
<div id="page-wrapper">

    <div class="container-fluid">
        <h3>Thống kê sản phẩm và người dùng  </h3>
        <hr>
        <canvas id="lineChart"></canvas>

        <h3>Thống kê sản phẩm</h3>
        <canvas id="horizontalBar"></canvas>
    </div>

    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<script>

    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
    label: "My First dataset",
    data: [{{$order[0]->quantity}}, {{$order[1]->quantity}}, {{$order[2]->quantity}}, {{$order[3]->quantity}}, {{$order[4]->quantity}}, 5, 4],
    // data: [65, 59, 80, 81, 56, 55, 40],
    backgroundColor: [
    'rgba(105, 0, 132, .2)',
    ],
    borderColor: [
    'rgba(200, 99, 132, .7)',
    ],
    borderWidth: 2
    },
    {
    label: "My Second dataset",
    data: [28, 48, 40, 19, 86, 27, 90],
    backgroundColor: [
    'rgba(0, 137, 132, .2)',
    ],
    borderColor: [
    'rgba(0, 10, 130, .7)',
    ],
    borderWidth: 2
    }
    ]
    },
    options: {
    responsive: true
    }
    });


    new Chart(document.getElementById("horizontalBar"), {
    "type": "horizontalBar",
    "data": {
    "labels": ["Cơm chiên", "Mì cay cấp độ", "Súp ngô", "Bánh xèo", "Thịt nướng"],
    "datasets": [{
    "label": "My First Dataset",
    "data": [{{$query[0]->quantity}}, {{$query[1]->quantity}}, {{$query[2]->quantity}}, {{$query[3]->quantity}}, {{$query[4]->quantity}} ],
    "fill": false,
    "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
    "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
    ],
    "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"
    ],
    "borderWidth": 1
    }]
    },
    "options": {
    "scales": {
    "xAxes": [{
    "ticks": {
    "beginAtZero": true
    }
    }]
    }
    }
    });
</script>
@endsection
