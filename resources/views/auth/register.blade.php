@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="nganh_nghe" class="col-md-4 col-form-label text-md-right">{{ __('nganh_nghe') }}</label>

                            <div class="col-md-6">
                                <input id="nganh_nghe" type="text" class="form-control{{ $errors->has('nganh_nghe') ? ' is-invalid' : '' }}" name="nganh_nghe" value="{{ old('nganh_nghe') }}" required autofocus>

                                @if ($errors->has('nganh_nghe'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nganh_nghe') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="loai_hinh" class="col-md-4 col-form-label text-md-right">{{ __('loai_hinh') }}</label>

                            <div class="col-md-6">
                                <input id="loai_hinh" type="text" class="form-control{{ $errors->has('loai_hinh') ? ' is-invalid' : '' }}" name="loai_hinh" value="{{ old('loai_hinh') }}" required autofocus>

                                @if ($errors->has('loai_hinh'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('loai_hinh') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="co_quan_cap_tren_truc_tiep_quan_ly" class="col-md-4 col-form-label text-md-right">{{ __('co_quan_cap_tren_truc_tiep_quan_ly') }}</label>

                            <div class="col-md-6">
                                <input id="co_quan_cap_tren_truc_tiep_quan_ly" type="text" class="form-control{{ $errors->has('co_quan_cap_tren_truc_tiep_quan_ly') ? ' is-invalid' : '' }}" name="co_quan_cap_tren_truc_tiep_quan_ly" value="{{ old('co_quan_cap_tren_truc_tiep_quan_ly') }}" required autofocus>

                                @if ($errors->has('co_quan_cap_tren_truc_tiep_quan_ly'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('co_quan_cap_tren_truc_tiep_quan_ly') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dia_chi" class="col-md-4 col-form-label text-md-right">{{ __('dia_chi') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="text" class="form-control{{ $errors->has('dia_chi') ? ' is-invalid' : '' }}" name="dia_chi" value="{{ old('dia_chi') }}" required autofocus>

                                @if ($errors->has('dia_chi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dia_chi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dien_thoai" class="col-md-4 col-form-label text-md-right">{{ __('dien_thoai') }}</label>

                            <div class="col-md-6">
                                <input id="dien_thoai" type="text" class="form-control{{ $errors->has('dien_thoai') ? ' is-invalid' : '' }}" name="dien_thoai" value="{{ old('dien_thoai') }}" required autofocus>

                                @if ($errors->has('dien_thoai'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dien_thoai') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
