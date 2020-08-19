@extends('../../admin/masterAdmin');
@section('content');
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row " style="margin-top: 20px">
            <div class="col-lg-4 col-sm-6 col-xs-12 ">
                <div class="white-box analytics-info">
                   
                    <ul class="list-inline two-part">
                        
                        <li class="text-right">
                            <h3 class="box-title">Total Visit</h3>
                            <i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                        <li>
                           
                            <canvas id="doughnutChart"></canvas>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total Page Views</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Unique Visitor</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none">
                            <option>March 2017</option>
                            <option>April 2017</option>
                            <option>May 2017</option>
                            <option>June 2017</option>
                            <option>July 2017</option>
                        </select>
                    </div>
                    <h3 class="box-title">Recent sales</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{$id=1}}
                                @foreach ($order as $item)
                                    <tr>
                                        <td>{{$id++}}</td>
                                        <td class="">{{$item->name}}</td>
                                        <td>{{$item->title}}</td>
                                        <td class="txt-oflo">{{$item->quantity}}</td>
                                        <td><span class="text-success">{{$item->unit_price}}</span></td>
                                        <td class="txt-oflo">{{$item->quantity*$item->unit_price}}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<script>
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
    datasets: [{
    data: [40, 120],
    backgroundColor: [ "#4D5360"],
    hoverBackgroundColor: [ "#616774"]
    }]
    },
    options: {
    responsive: true
    }
    });
</script>
@endsection
