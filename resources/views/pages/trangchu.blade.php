
@extends('index')
@section('content')
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(Asset/images/bg_1.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-12 ftco-animate text-center">
            <h1 class="mb-2">Cung cấp thực phẩm tươi sạch, đảm bảo vệ sinh.</h1>
            <h2 class="subheading mb-4">Cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng.</h2>
            <p><a href="{{ route('muangay') }}" class="btn btn-primary">Mua ngay</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url(Asset/images/bg_2.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-sm-12 ftco-animate text-center">
            <h1 class="mb-2">Bửa ăn tươi ngon, an toàn cho mọi gia đình.</h1>
            <h2 class="subheading mb-4">Cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng.</h2>
            <p><a href="{{ route('muangay') }}" class="btn btn-primary">Mua ngay</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
      <div class="container">
          <div class="row no-gutters ftco-services">
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-shipped"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Miễn phí vận chuyển</h3>
          <span>Cho đơn trên 100.000đ</span>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-diet"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Tươi sạch</h3>
          <span>Sản phẩm chất lượng tốt</span>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Chất lượng cao</h3>
          <span>Chất lượng sản phẩm</span>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-customer-service"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Ưu đãi hấp dẫn</h3>
          <span>Quyền lợi sinh nhật đặc biệt</span>
        </div>
      </div>
    </div>
  </div>
      </div>
  </section>

  <section class="ftco-section ftco-category ftco-no-pt">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="row">
                      <div class="col-md-6 order-md-last align-items-stretch d-flex">
                          <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(Asset/images/category.jpg);">
                              <div class="text text-center">
                                  <h2>D&N</h2>
                                  <p>Bảo vệ sức khỏe mọi nhà.</p>
                                  <p><a href="{{ route('muangay') }}" class="btn btn-primary">Mua ngay</a></p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(Asset/images/category-1.jpg);">
                              <div class="text px-3 py-1">
                                  <h2 class="mb-0"><a href="#">Hoa quả sạch</a></h2>
                              </div>
                          </div>
                          <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(Asset/images/category-2.jpg);">
                              <div class="text px-3 py-1">
                                  <h2 class="mb-0"><a href="#">Rau củ xanh</a></h2>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(Asset/images/category-3.jpg);">
                      <div class="text px-3 py-1">
                          <h2 class="mb-0"><a href="#">Thực phẩm tươi</a></h2>
                      </div>
                  </div>
                  <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(Asset/images/category-4.jpg);">
                      <div class="text px-3 py-1">
                          <h2 class="mb-0"><a href="#">Dinh dưỡng mỗi ngày</a></h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

<section class="ftco-section">
  <div class="container">
          <div class="row justify-content-center mb-3 pb-3">
    <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">SẢN PHẨM BÁN CHẠY</span>
    </div>
  </div>
  </div>
  <div class="container">
      <div class="row">
        @foreach ($hot as $key => $item )
          <div class="col-md-6 col-lg-3 ftco-animate">
              <div class="product">
                  <a href="{{URL::to('/view'.$item->product_id)}}" class="img-prod"><img class="img-fluid" id="Product_img_{{$item->product_id}}" src="Asset/images/{{$item->Thumbnail}}" alt="D&N">
                      <div class="overlay"></div>
                  </a>
                  <div class="text py-3 pb-4 px-3 text-center">
                      <h3><a href="{{route('chitietsanpham', ['id'=> $item->product_id])}}" id="Product_title_{{$item->product_id}}" title="{{$item->Title}}">{{$item->Title}}</a></h3>
                      <div class="d-flex">
                          <div class="pricing">
                              <p class="price" id="Product_price_{{$item->product_id}}" title="{{$item->Discount}}"><span>{{number_format($item->Discount,0,',','.')}}đ</span></p>
                          </div>
                      </div>
                      <div class="bottom-area d-flex px-3">
                          <div class="m-auto d-flex">
                              <a href="{{route('chitietsanpham', ['id'=> $item->product_id])}}" class=" d-flex justify-content-center align-items-center text-center">
                                  <span><i class="fa fa-eye "></i></span>
                              </a>
                              <a href="#" id="addtocart" class="addtocart d-flex justify-content-center align-items-center mx-1" data-url="{{ route('addtocart', ['id'=>$item->product_id]) }}" onclick="addtocart">
                                  <span><i class="ion-ios-cart"></i></span>
                              </a>
                              <a  class="heart d-flex justify-content-center align-items-center " id="{{$item->product_id}}" onclick="add_wistlist(this.id);">
                                  <span><i class="ion-ios-heart"></i></span>
                              </a>
                          </div>
                      </div>
                      <script>

                      </script>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</section>


  <section class="ftco-section img" style="background-image: url(Asset/images/bg_3.jpg);">
  <div class="container">
          <div class="row justify-content-end">
    <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
        <span class="subheading">Giá tốt nhất cho bạn</span>
      <h2 class="mb-4">Ưu đãi trong ngày</h2>
      <p>Bửa ăn tươi ngon, an toàn cho mọi gia đình.</p>
      <h3><a href="#">Rau chân vịt</a></h3>
      <span class="price">50.000đ <a href="#">bây giờ chỉ còn 29.000đ</a></span>
      <div id="timer" class="d-flex mt-5">
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
        </div>
    </div>
  </div>
  </div>
</section>

<section class="ftco-section testimony-section">
<div class="container">
  <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading">TIN MỚI MỖI NGÀY</span>
    </div>
  </div>

  <div class="row ftco-animate">
    <div class="col-md-12">
      <div class="carousel-testimony owl-carousel">
        @foreach ($blog as $key => $item )
        <div class="item">
          <div class="testimony-wrap p-4 pb-5">
            <div class="user-img mb-5" style="background-image: url(Asset/images/{{$item->BlogImg}})">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text text-center">
                <p class="name">{{$item->BlogName}}</p>
              <p class="mb-5 pl-4 line">{{$item->BlogContent}}</p>
              <span class="position">{{$item->Created_at}}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
</section>

<hr>

  <section class="ftco-section ftco-partner">
  <div class="container">
      <div class="row">
          <div class="col-sm ftco-animate">
              <a href="#" class="partner"><img src="Asset/images/thuonghieu1.png" class="img-fluid" alt="D&N"></a>
          </div>
          <div class="col-sm ftco-animate">
              <a href="#" class="partner"><img src="Asset/images/thuonghieu2.png" class="img-fluid" alt="D&N"></a>
          </div>
          <div class="col-sm ftco-animate">
              <a href="#" class="partner"><img src="Asset/images/thuonghieu3.png" class="img-fluid" alt="D&N"></a>
          </div>
          <div class="col-sm ftco-animate">
              <a href="#" class="partner"><img src="Asset/images/thuonghieu4.png" class="img-fluid" alt="D&N"></a>
          </div>
          <div class="col-sm ftco-animate">
              <a href="#" class="partner"><img src="Asset/images/thuonghieu5.png" class="img-fluid" alt="D&N"></a>
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
          <input type="text" class="form-control" placeholder="Email của bạn...">
          <input type="submit" value="Subscribe" class="submit px-3">
        </div>
      </form>
    </div>
  </div>
</div>
</section>



@endsection

