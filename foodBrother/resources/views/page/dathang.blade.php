@extends('page.master')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form method="POST">
    @csrf
    <div id="thongtin">
        <div class="container-fluid">

            <div class="row">
                <div class="col-3">
                    <p><p class="btn btn-danger">1</p> Nhập thông tin khách hàng:</p>
                   
                        @foreach ($user as $users)
                        <p type="text" class="form-control mb-3" name="hoten" id="hoten" >{{ $users->name }}</p>
                        <p type="text" class="form-control mb-3" name="dienthoai" id="dienthoai" >{{ $users->phoneNumber }}</p>
                        <p type="text" class="form-control mb-3" name="email" id="email" >{{ $users->email }}</p>
                        <p type="text" class="form-control mb-3" name="diachi" id="diachi" >{{ $users->city }}</p>
                        <input type="text" class="form-control mb-3" name="diachi" id="diachi" placeholder="Địa chỉ giao hàng">
                        <input type="text" class="form-control mb-3" name="thoigian" id="diachi" placeholder="Thời gian muốn giao hàng">
                        <textarea rows="4" class="form-control mb-3" cols="40" name="ghichu" placeholder="Ghi chú"></textarea>
                        @endforeach
                    
                </div>
                <div class="col-5">
                    <p><p class="btn btn-danger">2</p> Chọn hình thức thanh toán:</p>
                    <div style="width: 300px; border-style: inset; padding:10px; border-radius: 5px;border:1px solid #D3D3D3;width:300px; height:150px;">
                        <h4> Thanh toan</h4>
                        <hr/>
                        <input class="input-radio" type="radio" value="399383" name="PaymentMethodId" id="payment_method_399383"                                                             
data-check-id="4" bind="payment_method_id" checked="">Thanh toán khi giao hàng (COD)
                        <label style="color: red"> Bạn chỉ thanh toán khi nhận được hàng</label>
                    </div>

                </div>
                <div class="col-4">
                    <p><p class="btn btn-danger" onclick="capnhat()">3</p> Xem lại đơn hàng:</p>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <!-- <div class="col-3"></div>
                                <div class="col-5">
                                    <p>Mẫu hàng AT01</p>
                                </div>
                                <div class="col-4">
                                    <p id="mauhang"></p>
                                </div> -->
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <a type="hidden" {{ $total=0 }}>
                                        @foreach ($cart as $item)
                                        <tr>
                                            <td><img id="img_1" src="{{ $item->image }}" style="width: 70%"></td>
                                            <td>{{ $item->title }}</td>
                                            <td> {{ $item->unit_price }}</td>
                                            <p type="hidden" {{ $total=$total+($item->unit_price*$item->quantity )}}></p>
                                            <td id="sl1">{{ $item->quantity }}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6"><p>Tạm tính:</p></div>

                                    <div class="col-6"><p id="tamtinhh">{{ $total }}đ</p></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <strong class="text-uppercase">Tổng cộng:</strong>
                                    </div>
                                    <div class="col-6">
                                        <!-- <p class="text-success" id="tongtien">2.520.000 đ</p> -->
                                        <input type="text" class="form-control" disabled id="tongtienn" value={{ $total }} name="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger form-control mt-3">ĐẶT HÀNG</button>
                    </div>

                </div>
            </form>
</body>
</html>


@endsection