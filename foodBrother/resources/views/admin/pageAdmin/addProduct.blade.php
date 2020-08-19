@extends('../../admin/masterAdmin');
@section('content');
<?php



?>
<div id="page-wrapper">
    <div class="container-fluid">
    <form class="form-horizontal" enctype="multipart/form-data"  action="{{ route('themsp') }}" method="POST">
      {{  csrf_field()  }}
        <fieldset>
           
        <!-- Form Name -->
        <legend>THÊM SẢN PHẨM</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="product_name">TÊN</label>
          <div class="col-md-4">
          <input id="product_name" name="ten" placeholder="TÊN" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="product_categorie"> LOẠI</label>
          <div class="col-md-4">
            <select id="product_categorie" name="loai" class="form-control">
                <option value="Chiên">Chiên</option>
                <option value="Mì">Mì</option>
                <option value="Bánh">Bánh</option>
                <option value="Chay">Chay</option>
                <option value="Khai vị">Khai vị</option>
                <option value="Cay">Cay</option>
                <option value="Gỏi">Gỏi</option>
                <option value="Súp">Súp</option>
              </select>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="product_weight">GIÁ</label>
          <div class="col-md-4">
          <input id="product_weight" name="gia" placeholder="GIÁ" class="form-control input-md" required="" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="product_weight">GIÁ GIẢM</label>
          <div class="col-md-4">
          <input id="product_weight" name="giagiam" placeholder="GIÁ GIẢM" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="product_weight">SỐ LƯỢNG</label>
          <div class="col-md-4">
          <input id="product_weight" name="soluong" placeholder="SỐ LƯỢNG" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="product_description">MÔ TẢ</label>
          <div class="col-md-4">
            <textarea class="form-control" id="product_description" name="mota"></textarea>
          </div>
        </div>
         <!-- File Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton">THÊM ẢNH</label>
          <div class="col-md-4">
            <input id="filebutton" name="myFile" class="input-file" type="file">
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">THÊM</button>
          </div>
          </div>

        </fieldset>
        </form>

    <!-- /.container-fluid -->
    </div>
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
@endsection
