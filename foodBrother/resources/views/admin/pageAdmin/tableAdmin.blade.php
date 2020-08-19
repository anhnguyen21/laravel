@extends('../../admin/masterAdmin');
@section('content');
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none" id="sel">
                            <option >Tất cả sản phẩm</option>
                            @foreach ($type as $type)
                                <option value={{$type->id}} onclick="select()">{{$type->type}}</option>
                            @endforeach

                        </select>
                    </div>
                   <div class="row">
                        <button class="btn" onclick="displayProduct()">sản phẩm</button>
                        <button class="btn" onclick="displayCustomer()">Khách hàng</button>
                   </div>
                    <div class="table-responsive product" id="product">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">giá</th>
                                <th scope="col">Loại sản phẩm</th>
                                <th scope="col">img</th>
                                <th scope="col">option</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->unit_price}}</td>
                                    <td>{{$item->id_type}}</td>
                                    <td><img src="{{$item->image}}" alt="" style="width: 50px; height:50px"></td>
                                    <td>
                                        <div style="display: flex;">
                                            <form method="POST" action="">
                                                @csrf
                                                @method('DELETE')
                                                @method('UPDATE')
                                                
                                                <a href="{{ route('xoasanpham',$item->id) }}" class="btn btn-danger" type="submit">Xóa</a>
                                                <a href="{{ route('suasanp',$item->id) }}" class="btn btn-danger">Sửa</a>

                                            </form>
                                        </div>
                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>
                          </table>
                        <button class="btn"><a href="{{ route('export') }}">Export</a></button>
                        <button class="btn">Import</button>
                    </div>
                    <div class="table-responsive customer" id="customer" style="display: none">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">address</th>
                                <th scope="col">phone</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($use as $item)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->city}}</td>
                                    <td>{{$item->phoneNumber}}</td>
                                  </tr>
                                @endforeach
                            </tbody>
                          </table>
                          <button class="btn">Export</button>
                        <button class="btn">Import</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<script>
    function select(){
        var e = document.getElementById("sel");
        var strUser = e.options[e.selectedIndex].value;
        console.log(strUser);
    }

    function displayProduct(){
        document.getElementById("product").style.display="block";
        document.getElementById("customer").style.display="none";
    }
    function displayCustomer(){
        document.getElementById("product").style.display="none";
        document.getElementById("customer").style.display="block";
    }
</script>
@endsection
