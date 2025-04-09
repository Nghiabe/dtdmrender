@extends('index_Admin')
@section('Admin_Content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm nhân viên
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{ route('savestaff') }}" method="post">
                                    @csrf
                                <div class="row register-form">
                                    <h3 class="mb-4 billing-heading">Thông tin nhân viên</h3>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name" style="color: #000000;font-size: 14px;">Họ và tên nhân viên</label>
                                            <input type="text" class="form-control"  value="{{ old('staffname') }}" name="staffname" />
                                            @if ($errors->has('staffname'))
                                            <span class="text-danger text-left">{{ $errors->first('staffname') }}</span>
                                        @endif
                                        </div>
                                        <label for="phone" style="color: #000000;font-size: 14px;">Số điện thoại nhân viên</label>
                                        <div class="form-group">
                                            <input  type="text" class="form-control" value="{{ old('staff_phone') }}" name="staff_phone" />
                                            @if ($errors->has('staff_phone'))
                                            <span class="text-danger text-left">{{ $errors->first('staff_phone') }}</span>
                                        @endif
                                        </div>
                                        <label for="phone" style="color: #000000;font-size: 14px;">Địa chỉ</label>
                                        <div class="form-group">
                                            <input  type="text" class="form-control" value="{{ old('staff_address') }}"  name="staff_address"/>
                                            @if ($errors->has('staff_address'))
                                            <span class="text-danger text-left">{{ $errors->first('staff_address') }}</span>
                                        @endif
                                        </div>
                                        <label for="phone" style="color: #000000;font-size: 14px;">Chức vụ</label>
                                        <div class="form-group">
                                            <input  type="text" class="form-control" value="{{ old('staff_position') }}"  name="staff_position"/>
                                            @if ($errors->has('staff_position'))
                                            <span class="text-danger text-left">{{ $errors->first('staff_position') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                        <h3 class="mb-4 billing-heading">Tài khoản nhân viên</h3>
                                        <br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone" style="color: #000000;font-size: 14px;">Tên tài khoản</label>
                                            <input type="text" class="form-control" value="{{ old('name') }}" name="staff_name" />
                                            @if ($errors->has('staff_name'))
                                            <span class="text-danger text-left">{{ $errors->first('staff_name') }}</span>
                                        @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" style="color: #000000;font-size: 14px;">Email</label>
                                            <input  type="text" class="form-control"  value="{{ old('email') }}" name="staff_email" />
                                            @if ($errors->has('staff_email'))
                                            <span class="text-danger text-left">{{ $errors->first('staff_email') }}</span>
                                        @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" style="color: #000000;font-size: 14px;">Mật khẩu</label>
                                            <input  type="password" class="form-control"  value=""  name="staff_pass"/>
                                            @if ($errors->has('staff_pass'))
                                            <span class="text-danger text-left">{{ $errors->first('staff_pass') }}</span>
                                        @endif

                                        </div>




                                    </form>
                                    <button class="btnRegister" type="submit"">Thêm nhân viên</button>
                            </div>

                        </div>
                    </section>
</div>

@endsection
