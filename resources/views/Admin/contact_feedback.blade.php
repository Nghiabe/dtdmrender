@extends('index_Admin')
@section('Admin_Content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Phản hồi liên hệ
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{ route('contact_feedback') }}" method="post">
                                    @csrf
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name" style="color: #000000;font-size: 14px;">Tên khách hàng</label>
                                            <input type="text" class="form-control"  value="{{ old('name') }}" name="name" />
                                            @if ($errors->has('name'))
                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                        @endif
                                        </div>
                                        <label for="phone" style="color: #000000;font-size: 14px;">Email khách hàng</label>
                                        <div class="form-group">
                                            <input  type="text" class="form-control" value="{{ old('email') }}" name="email" />
                                            @if ($errors->has('email'))
                                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                        @endif
                                        </div>
                                        <label for="phone" style="color: #000000;font-size: 14px;">Nội dung phản hồi</label>
                                        <div class="form-group">
                                            <input  type="text" class="form-control" value="{{ old('content') }}"  name="content"/>
                                            @if ($errors->has('content'))
                                            <span class="text-danger text-left">{{ $errors->first('content') }}</span>
                                        @endif
                                        </div>

                                    </div>
                                          </form>
                                    <button class="btnRegister" type="submit"">Gửi</button>
                            </div>

                        </div>
                    </section>
</div>

@endsection
