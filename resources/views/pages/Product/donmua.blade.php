<style>@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
.card{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 0.10rem}.card-header:first-child{border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0}.card-header{padding: 0.75rem 1.25rem;margin-bottom: 0;background-color: #fff;border-bottom: 1px solid rgba(0, 0, 0, 0.1)}.track{position: relative;background-color: #ddd;height: 7px;display: -webkit-box;display: -ms-flexbox;display: flex;margin-bottom: 60px;margin-top: 50px}.track .step{-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;width: 25%;margin-top: -18px;text-align: center;position: relative}.track .step.active:before{background: #FF5722}.track .step::before{height: 7px;position: absolute;content: "";width: 100%;left: 0;top: 18px}.track .step.active .icon{background: #ee5435;color: #fff}.track .icon{display: inline-block;width: 40px;height: 40px;line-height: 40px;position: relative;border-radius: 100%;background: #ddd}.track .step.active .text{font-weight: 400;color: #000}.track .text{display: block;margin-top: 7px}.itemside{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;width: 100%}.itemside .aside{position: relative;-ms-flex-negative: 0;flex-shrink: 0}.img-sm{width: 80px;height: 80px;padding: 7px}ul.row, ul.row-sm{list-style: none;padding: 0}.itemside .info{padding-left: 15px;padding-right: 7px}.itemside .title{display: block;margin-bottom: 5px;color: #212529}p{margin-top: 0;margin-bottom: 1rem}.btn-warning{color: #ffffff;background-color: #ee5435;border-color: #ee5435;border-radius: 1px}.btn-warning:hover{color: #ffffff;background-color: #ff2b00;border-color: #ff2b00;border-radius: 1px}</style>
@extends('index')
@section('content')
<div class="hero-wrap hero-bread " style="background-image: url('Asset/images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Giỏ hàng</span></p>
          <h1 class="mb-0 bread">Đơn hàng của tôi</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <article class="card">

        <div class="card-body">
            <h6>Mã đơn hàng: OD45345345435</h6>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Thời gian giao hàng:</strong> <br>29 nov 2019 </div>
                    <div class="col"> <strong>Giao hàng bởi:</strong> <br> Nghia, | <i class="fa fa-phone"></i> +1598675986 </div>
                    <div class="col"> <strong>Trạng thái:</strong> <br> Chọn bởi chuyển phát nhanh </div>
                    <div class="col"> <strong>Theo dõi #:</strong> <br> BD045903594059 </div>
                </div>
            </article>
            <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Xác nhận đặt hàng</span> </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Chọn bởi chuyển phát nhanh</span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> Trên đường </span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Sẵn sàng giao</span> </div>
            </div>
            <hr>
            <ul class="row">
                {{-- @foreach ( $order_details as $pro )


                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="{{$pro->Img}}" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">{{$pro->Name}}<br> SL:{{$pro->quantity}}</p> <span class="text-muted">Giá:{{$pro->price}} </span>
                        </figcaption>
                    </figure>
                </li>
                @endforeach --}}
            </ul>
            <hr>
            <a href="#" class="btn btn-warning" data-abc="true"> </i> Hủy</a>
        </div>
    </article>
</div>
      <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Theo dõi bản tin của chúng tôi</h2>
            <span>Nhận thông tin cập nhật qua email về các cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt</span>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <form action="#" class="subscribe-form">
            <div class="form-group d-flex">
              <input type="text" class="form-control" placeholder="Nhập địa chỉ email">
              <input type="submit" value="Subscribe" class="submit px-3">
            </div>
          </form>

      </div>
    </div>
  </section>
@endsection
