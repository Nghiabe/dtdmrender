@extends('index')

@section('content')

<div class="main">
    <div class="content">
        @yield('conten')



    </div>


    <div class="switch" id="switch-cnt">
      <div class="switch__circle"></div>
      <div class="switch__circle switch__circle--t"></div>
      <div class="switch__contail" id="switch-c1">
        <h2 class="switch__title title">Chào mừng bạn đến với D&N!</h2>
        <p class="switch__description description">Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn.</p>
        <button class="switch__button button switch-btn" >ĐĂNG NHẬP</button>
      </div>
      <div class="switch__contail is-hidden" id="switch-c2">
        <h2 class="switch__title title">Chào mừng bạn đến với D&N</h2>
        <p class="switch__description description">Nhập thông tin cá nhân của bạn và bắt đầu mua sắm với chúng tôi.</p>
        <button class="switch__button button switch-btn">ĐĂNG KÝ</button>
      </div>
    </div>
  </div>
@endsection

