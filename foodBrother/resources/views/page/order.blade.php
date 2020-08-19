@extends('../page/master')
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
    <div style="display:flex;">
            <form style="width: 400px;margin-left: 100px;margin-top: 50px;border-radius: 5px;">
            <h4 style="margin-left: 15px;">     Personal information</h4>
            <div style="margin: 20px;">

            <hr/>

            <div class="form-group">
              {{-- <h5>Delivery address<span style="color: red"> (*)</span></h5> --}}
              <input type="text" class="form-control" id="address"  placeholder="Delivery address">
              <small id="emailHelp" class="form-text text-muted">The address you want to ship to</small>
            </div>
            <div class="form-group">
              {{-- <h5 >Time want delivery<span style="color: red"> (*)</span></h5> --}}
              <input type="password" class="form-control" id="timdelivery" placeholder="Time want delivery">
            </div>
            <div class="form-group">
                {{-- <h5 >Notes</h5> --}}
               <textarea type="text" placeholder="Notes" class="form-control" id="Ghichu"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
            </form>
        <div style="width: 300px; border-style: inset;margin: 50px; padding:10px; border-radius: 5px;border:1px solid #D3D3D3;width:300px; height:150px;">
            <h4> Thanh toan</h4>
            <hr/>
            <input class="input-radio" type="radio" value="399383" name="PaymentMethodId" id="payment_method_399383" data-check-id="4" bind="payment_method_id" checked="">Thanh toán khi giao hàng (COD)
            <label style="color: red"> Bạn chỉ thanh toán khi nhận được hàng</label>
        </div>
    </div>
</body>
</html>


@endsection