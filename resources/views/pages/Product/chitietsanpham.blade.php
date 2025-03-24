
@extends('index')
<style>.cart-de{
    width: 100%;
    display: block;
}

.product-details {
	padding-top: 80px;
}

.product__details__pic__item {
	margin-bottom: 20px;
}

.product__details__pic__item img {
	width: 100%;
}

.product__details__pic__slider img {
	cursor: pointer;
}

.product__details__pic__slider.owl-carousel .owl-item img {
	width: auto;
}

.product__details__text h3 {
	color: #252525;
	font-weight: 700;
	margin-bottom: 16px;
}

.product__details__text .product__details__rating {
	font-size: 14px;
	margin-bottom: 12px;
}

.product__details__text .product__details__rating i {
	margin-right: -2px;
	color: #EDBB0E;
}

.product__details__text .product__details__rating span {
	color: #dd2222;
	margin-left: 4px;
}

.product__details__text .product__details__price {
	font-size: 30px;
	color: #dd2222;
	font-weight: 600;
	margin-bottom: 15px;
}

.product__details__text p {
	margin-bottom: 45px;
}

.product__details__text .primary-btn {
	padding: 16px 28px 14px;
	margin-right: 6px;
	margin-bottom: 5px;
}

.product__details__text .heart-icon {
	display: inline-block;
	font-size: 16px;
	color: #6f6f6f;
	padding: 13px 16px 13px;
	background: #f5f5f5;
}

.product__details__text ul {
	border-top: 1px solid #ebebeb;
	padding-top: 40px;
	margin-top: 50px;
}

.product__details__text ul li {
	font-size: 16px;
	color: #1c1c1c;
	list-style: none;
	line-height: 36px;
}

.product__details__text ul li b {
	font-weight: 700;
	width: 170px;
	display: inline-block;
}

.product__details__text ul li span samp {
	color: #dd2222;
}

.product__details__text ul li .share {
	display: inline-block;
}

.product__details__text ul li .share a {
	display: inline-block;
	font-size: 15px;
	color: #1c1c1c;
	margin-right: 25px;
}

.product__details__text ul li .share a:last-child {
	margin-right: 0;
}

.product__details__quantity {
	display: inline-block;
	margin-right: 6px;
}

.pro-qty {
	width: 140px;
	height: 50px;
	display: inline-block;
	position: relative;
	text-align: center;
	background: #f5f5f5;
	margin-bottom: 5px;
}

.pro-qty input {
	height: 100%;
	width: 100%;
	font-size: 16px;
	color: #6f6f6f;
	width: 50px;
	border: none;
	background: #f5f5f5;
	text-align: center;
}

.pro-qty .qtybtn {
	width: 35px;
	font-size: 16px;
	color: #6f6f6f;
	cursor: pointer;
	display: inline-block;
}

.product__details__tab {
	padding-top: 85px;
}

.product__details__tab .nav-tabs {
	border-bottom: none;
	justify-content: center;
	position: relative;
}

.product__details__tab .nav-tabs:before {
	position: absolute;
	left: 0;
	top: 12px;
	height: 1px;
	width: 370px;
	background: #ebebeb;
	content: "";
}

.product__details__tab .nav-tabs:after {
	position: absolute;
	right: 0;
	top: 12px;
	height: 1px;
	width: 370px;
	background: #ebebeb;
	content: "";
}

.product__details__tab .nav-tabs li {
	margin-bottom: 0;
	margin-right: 65px;
}

.product__details__tab .nav-tabs li:last-child {
	margin-right: 0;
}

.product__details__tab .nav-tabs li a {
	font-size: 16px;
	color: #999999;
	font-weight: 700;
	border: none;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	padding: 0;
}

.product__details__tab .product__details__tab__desc {
	padding-top: 44px;
}

.product__details__tab .product__details__tab__desc h6 {
	font-weight: 700;
	color: #333333;
	margin-bottom: 26px;
}

.product__details__tab .product__details__tab__desc p {
	color: #666666;
}

/*---------------------
  Shop Details
-----------------------*/

.related-product {
	padding-bottom: 30px;
}

.related__product__title {
	margin-bottom: 70px;
}
.product__details__price {
    font-size: 30px;
    color: #dd2222;
    font-weight: 600;
    margin-bottom: 15px;
}</style>
@section('content')
  <div class="hero-wrap hero-bread " style="background-image: url('Asset/images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Sản phẩm</span></p>
          <h1 class="mb-0 bread" id="detail"> {{$sanpham->Title}}</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="Asset/images/{{$sanpham->Thumbnail}}" alt="" style="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$sanpham->Title}}</h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 đánh giá)</span>
                    </div>
                    <div class="product__details__price" style="font-size: 30px;
                    color: #dd2222;
                    font-weight: 600;
                    margin-bottom: 15px;">{{number_format($sanpham->Discount)}}<u>VNĐ</u></div>


<a href="#" id="addtocart" class="addtocart " data-url="{{ route('addtocart', ['id'=>$sanpham->product_id]) }}" onclick="addtocart"><button class="btnRegister" type="submit"">THÊM VÀO GIỎ HÀNG</button></a>
                    <button class="btnRegister" type="submit">MUA NGAY</button>
                    <ul>
                        <li><b>Danh mục:</b> <span>{{$namecategory->Name}}</span></li>
                        <li><b>Vận chuyển:</b> <span>Vận chuyển trong ngày<samp>.Mua ngay</samp></span></li>
                        <li><b>Bảo hiểm:</b> <span>Bảo hiểm trách nhiệm sản phẩm</span></li>

                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                aria-selected="false">Mô tả sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Giới thiệu sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                aria-selected="false">Đánh giá <span>(1)</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <p>{{$sanpham->product_desc}}</p>
                            </div>
                        </div>
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">

                                <p>{{$sanpham->product_content	}}</p>
                            </div>
                        </div>

                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">

                            </div>
                        </div>
                    </div>
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
          <span class="subheading">SẢN PHẨM MỚI</span>
      </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
          @foreach ($new as $key => $item )
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{route('chitietsanpham', ['id'=> $item->product_id])}}" class="img-prod"><img class="img-fluid" id="Product_img_{{$item->product_id}}" src="Asset/images/{{$item->Thumbnail}}" alt="D&N">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="{{route('chitietsanpham', ['id'=> $item->product_id])}}" id="Product_title_{{$item->product_id}}" title="{{$item->Title}}">{{$item->Title}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price" id="Product_price_{{$item->product_id}}" title="{{$item->Discount}}"><span>{{number_format($item->Discount,0,',','.')}}</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="{{route('chitietsanpham', ['id'=> $item->product_id])}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
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
