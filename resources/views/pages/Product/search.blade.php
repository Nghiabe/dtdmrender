@extends('index')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('Asset/images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="">Trang chủ</a></span> <span>Tìm kiếm</span></p>
          <h1 class="mb-0 bread">KẾT QUẢ TÌM KIẾM </h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading" style="text-transform: uppercase;">SẢN PHẨM TÌM KIẾM "{{$key}}"</span>
            </div>
          </div>


          <div class="row">
            @foreach ($search as $key => $item )
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="product">
                      <a href="{{route('chitietsanpham', ['id'=> $item->product_id])}}" class="img-prod"><img class="img-fluid" src="Asset/images/{{$item->Thumbnail}}" alt="Colorlib Template">
                          <div class="overlay"></div>
                      </a>
                      <div class="text py-3 pb-4 px-3 text-center">
                          <h3><a href="{{route('chitietsanpham', ['id'=> $item->product_id])}}">{{$item->Title}}</a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p class="price"><span>{{$item->Discount}}<u>đ</u></span></p>
                              </div>
                          </div>
                          <div class="bottom-area d-flex px-3">
                              <div class="m-auto d-flex">
                                  <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                      <span><i class="ion-ios-menu"></i></span>
                                  </a>
                                  <a href="#" id="addtocart" class="addtocart d-flex justify-content-center align-items-center mx-1" data-url="{{ route('addtocart', ['id'=>$item->product_id]) }}" onclick="addtocart">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                  <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                      <span><i class="ion-ios-heart"></i></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
          <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
  </section>

      <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Đăng kí nhận tin khuyến mãi</h2>
            <span>Nhận thông tin cập nhật qua email về cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt</span>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <form action="#" class="subscribe-form">
            <div class="form-group d-flex">
              <input type="text" class="form-control" placeholder="Email của bạn..">
              <input type="submit" value="Subscribe" class="submit px-3">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
