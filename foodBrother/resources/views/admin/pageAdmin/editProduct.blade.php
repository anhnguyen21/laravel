@extends('../../admin/masterAdmin');
@section('content');
<?php



?>
<div id="page-wrapper">
  <div class="container-fluid">
    <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('suasanp',$product->id) }}" method="POST">
      {{ csrf_field()  }}
      <fieldset>
        <!-- Form Name -->
        <legend>CHỈNH SỬA SẢN PHẨM</legend>

        <div style="display: flex;margin-top: 40px;">
        <!-- Text input-->
        <div >
        <div class="form-group">
          <div style="display:flex">
          <label class="col-md-4 control-label" for="product_name">TÊN</label>
          <div class="col-md-4" style="width:400px">
            <input id="product_name" name="ten" value="{{ $product->title }}" placeholder="TÊN" class="form-control input-md" required="" type="text">

          </div>
        </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <div style="display:flex">
          <label class="col-md-4 control-label" for="product_categorie"> LOẠI</label>
          <div class="col-md-4"style="width:400px">
            <div style="display:flex">
            <select id="product_categorie" name="loai" class="form-control" >
              @foreach ($categories as $category)
                @if ($category->id == $product->id_type)
                    <option selected value={{ $category->id }}> {{ $category->type }}</option>
                @else
                    <option value={{ $category->id }}> {{ $category->type }}</option>
                @endif
            @endforeach
            </select>
          </div>
          </div>
        </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <div style="display:flex">
          <label class="col-md-4 control-label" for="product_weight">GIÁ</label>
          <div class="col-md-4"style="width:400px">
            <input id="product_weight" name="gia" value="{{ $product->unit_price }}" placeholder="GIÁ" class="form-control input-md" required="" type="text">
          </div>
        </div>
        </div>

        <div class="form-group">
          <div style="display:flex">
          <label class="col-md-4 control-label" for="product_weight">GIÁ GIẢM</label>
          <div class="col-md-4" style="width:400px">
            <input id="product_weight" name="giagiam" value="{{ $product->promotion_price }}" placeholder="GIÁ GIẢM" class="form-control input-md" required="" type="text">
          </div>
        </div>
        </div>
      </div>
      <div>

        <div class="form-group">
          <div style="display:flex">
          <label class="col-md-4 control-label" for="product_weight">SỐ LƯỢNG</label>
          <div class="col-md-4" style="width:400px">
          <input id="product_weight" name="soluong"value="{{ $product->quantity }}"  placeholder="SỐ LƯỢNG" class="form-control input-md" required="" type="text">
          </div>
        </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
          <div style="display:flex">
          <label class="col-md-4 control-label" for="product_description">MÔ TẢ</label>
          <div class="col-md-4" style="width:400px">
            <textarea class="form-control" id="product_description" name="mota">
              {{ $product->description }}
            </textarea>
          </div>
        </div>
        </div>

        <!-- Text input-->
        {{-- <div class="form-group">
          <label class="col-md-4 control-label" for="approuved_by">Image Products</label>
          <div class="col-md-4"> --}}


        <!-- File Button -->
        <div class="form-group">
          <div style="display:flex">
          <label class="col-md-4 control-label" for="filebutton">THÊM ẢNH</label>
          <div class="col-md-4">
            <input id="filebutton" name="myFile" class="input-file" type="file">
          </div>
        </div>
        </div>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="singlebutton"></label>
                  <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">LƯU</button>
                  </div>
                </div>
      </div>
    </div>


      </fieldset>
    </form>

    <!-- /.container-fluid -->
  </div>
  <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
@endsection