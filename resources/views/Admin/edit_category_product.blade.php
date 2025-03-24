@extends('index_Admin')
@section('Admin_Content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhập danh mục sản phẩm
                        </header>
                        <div class="panel-body">
                            @foreach($edit_category_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->Category_ID)}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" value="{{$edit_value ->Name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize: name ;" rows="5" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$edit_value ->desc}}</textarea>
                                </div>
                                <button type="submit" name="update_category_product" class="btn btn-info">Cập nhập</button>
                            </form>
                            </div>
                            @endforeach

                        </div>
                    </section>
</div>
@endsection
