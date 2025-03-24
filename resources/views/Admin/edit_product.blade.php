@extends('index_Admin')
@section('Admin_Content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhập sản phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 @foreach($edit_product as $key => $pro)
                                <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" name="product_name" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$pro->Title}}">
                                </div>
                               <!--  <div class="form-group">
                                    <label for="exampleInputEmail1">SL sản phẩm</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số lượng" name="product_quantity" class="form-control" id="exampleInputEmail1" placeholder="Điền số lượng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="product_slug" class="form-control " id="convert_slug" placeholder="Tên danh mục">
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" value="{{$pro->Price}}" name="product_price" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá khuyến mãi</label>
                                    <input type="text" value="{{$pro->Discount}}" name="product_Discount" class="form-control" id="exampleInputEmail1">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" name="product_image" value="{{$pro->Thumbnail}}" class="form-control" id="exampleInputEmail1">
                                    <img name="product_image" src="{{URL::to('Asset/images/'.$pro->Thumbnail)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea style="resize: none"  rows="8" class="form-control" name="product_desc" id="ckeditor2" placeholder="Mô tả sản phẩm">{{$pro->product_desc}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_content"  id="ckeditor3" placeholder="Nội dung sản phẩm">{{$pro->product_content}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                      <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            @if($cate->Category_ID==$pro->Category_ID)
                                            <option selected value="{{$cate->Category_ID}}">{{$cate->Name}}</option>
                                            @else
                                            <option value="{{$cate->Category_ID}}">{{$cate->Name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="hot" value="1">Sản phẩm bán chạy</label>
                                    <label><input type="checkbox"name="new" value="1">Sản phẩm mới</label>
                                    <label><input type="checkbox"name="sale" value="1">Sản phẩm khuyến mãi</label>
                                  </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="product_status" class="form-control input-sm m-bot15">
                                         <option value="0">Ẩn</option>
                                            <option value="1">Hiển thị</option>

                                    </select>
                                </div>

                                <button type="submit" name="add_product" class="btn btn-info">Cập nhập sản phẩm</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
</div>

@endsection
