<style>
    .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{

    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
    margin-left: 30%;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
.btnbtn{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
#a{
    color: #383d41;
}

</style>
@extends('index')

@section('content')


<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">

            <h3>Chào mừng bạn đến với D&N!</h3>
            <p>Nhập thông tin cá nhân của bạn và bắt đầu mua sắm với chúng tôi.</p>
            <button class="btnbtn" type="submit" ><a href='dangnhap' id="a" >ĐĂNG NHẬP</a></button>
        </div>
        <div class="col-md-9 register-right">

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">ĐĂNG KÍ</h3>
                    <form action="{{ route('signup') }}" method="post">
                        @csrf
                    <div class="row register-form">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tên tài khoản*" value="{{ old('name') }}" name="name" />
                                @if ($errors->has('name'))
                                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                            @endif
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control" placeholder="Email *" value="{{ old('email') }}" name="email" />
                                @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif
                            </div>
                            <div class="form-group">
                                <input  type="password" class="form-control" placeholder="Mật khẩu *" value=""  name="password"/>
                                @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                            </div>
                            <div class="form-group">
                                <input  type="password" class="form-control"  placeholder="Nhập lại mật khẩu *"  name="password_confirmation" />
                                @if ($errors->has('password_confirmation'))
                                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                            </div>

                             <button class="btnRegister" type="submit"">ĐĂNG KÍ</button>
                             <br><br> <br>
                             <b style="margin-left:333px">Hoặc:</b>
                             <br><br>
                                 <a href="{{url('/login_facebook/facebook')}}" class=" btnRegister " style="margin-left:263px">
                                <i class="fab fa-facebook-f fa-fw"></i>
                               Đăng kí bằng facebook
                             </a>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
    @endsection


