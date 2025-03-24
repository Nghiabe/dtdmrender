@extends('index')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('Asset/images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Tin tức</span></p>
          <h1 class="mb-0 bread">Tin tức</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
                      <div class="row">

                @foreach ($blog as $key => $item )
                <div class="col-md-12 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch d-md-flex">
                    <a href="blog-single.html" class="block-20" style="background-image: url('Asset/images/{{$item->BlogImg}}');">
                    </a>
                    <div class="text d-block pl-md-4">
                        <div class="meta mb-3">
                        <div><a href="#">{{$item->Created_at}}</a></div>
                        <div><a href="#">{{$item->By}}</a></div>
                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                      </div>
                      <h3 class="heading"><a href="#">{{$item->BlogName}}</a></h3>
                      <p>{{$item->BlogContent}}</p>
                      <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Đọc ngay</a></p>
                    </div>
                  </div>
                </div>
                @endforeach

                      </div>
        </div>
    <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon ion-ios-search"></span>
                <input type="text" class="form-control" placeholder="Tìm kiếm...">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
              <h3 class="heading">Danh mục</h3>
            <ul class="categories">
                @foreach ($category as $key => $item )
                  <li><a href="#">{{$item->Name}}</a></li>
                @endforeach


            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading">Tin mới gần đây</h3>
            @foreach ($blog as $key => $item )
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(Asset/images/{{$item->BlogImg}});"></a>
              <div class="text">
                <h3 class="heading-1"><a href="#">{{$item->BlogName}}</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span>{{$item->Created_at}}</a></div>
                  <div><a href="#"><span class="icon-person"></span>{{$item->By}}</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            @endforeach

        </div>


        </div>

      </div>
    </div>
  </section>
  @endsection
