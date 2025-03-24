@extends('index')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('Asset/images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Giới thiệu</span></p>
          <h1 class="mb-0 bread">Giới thiệu</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
          <div class="container">
              <div class="row">
                  <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(Asset/images/about.jpg);">
                      <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                          <span class="icon-play"></span>
                      </a>
                  </div>
                  <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section-bold mb-4 mt-md-5">
                <div class="ml-md-0">
                  <h2 class="mb-4">Chào mừng bạn đến với D&N</h2>
              </div>
            </div>
            <div class="pb-md-5">
                <p>Bửa ăn tươi ngon, an toàn cho mọi gia đình.</p>
                          <p>Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị.</p>
                          <p><a href="#" class="btn btn-primary">Mua ngay</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Theo dõi bản tin của chúng tôi</h2>
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

      <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(Asset/images/bg_3.jpg);">
      <div class="container">
          <div class="row justify-content-center py-5">
              <div class="col-md-10">
                  <div class="row">
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="10000">0</strong>
                      <span>Khách hàng</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="100">0</strong>
                      <span>Chi nhánh</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="1000">0</strong>
                      <span>Sản phẩm</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="100">0</strong>
                      <span>Đơn bán</span>
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


  @endsection
