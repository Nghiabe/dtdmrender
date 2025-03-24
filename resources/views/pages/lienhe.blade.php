
@extends('index')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('Asset/images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Liên hệ</span></p>
          <h1 class="mb-0 bread">Liên hệ</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Địa chỉ:</span> 470 Trần Đại Nghĩa, Hòa Hải, Ngũ hành Sơn, Đà Nẵng</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Điện thoại:</span> <a href="tel:(84).236.3667117">+(84).236.3667117</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Email:</span> <a href="mailto:info@vku.udn.vn">info@vku.udn.vn</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Website</span> <a href="#">D&N.com</a></p>
            </div>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="{{ route('lienhe') }}" class="bg-white p-5 contact-form" method="POST">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="ten" placeholder="Tên của bạn">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Email của bạn">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="tieude" placeholder="Tiêu đề">
            </div>
            <div class="form-group">
              <textarea style="resize: none" rows="8" class="form-control" name="tinnhan"  id="id4" placeholder="Tin nhắn"></textarea>

            </div>
            <div class="form-group">
                <button class="btn btn-primary py-3 px-5" type="submit"">GỬI</button>

            </div>
          </form>

        </div>

        <div class="col-md-6 d-flex">
            <div id="map" class="bg-white"></div>
        </div>
      </div>
    </div>
  </section>

  </section>
  @endsection
