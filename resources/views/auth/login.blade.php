@extends('layouts.frontend.master')

@section('content')

    <!-- Login Area -->
    <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="login_form mb-50">
                        <h5 class="mb-3">Login</h5>

                        <form action="my-account.html" method="post">
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('role') is-invalid @enderror" type="radio"
                                           name="role" id="buyer"
                                           value="buyer"{{ old('role') == 'buyer' ? ' checked' : '' }}>
                                    <label class="form-check-label" for="buyer">{{ __('I am a customer') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('role') is-invalid @enderror" type="radio"
                                           name="role" id="vendor"
                                           value="vendor"{{ old('role') == 'vendor' ? ' checked' : '' }}>
                                    <label class="form-check-label" for="vendor">{{ __('I am a seller') }}</label>
                                </div>

                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="username" placeholder="Email or Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <div class="custom-control custom-checkbox mb-3 pl-1">
                                    <input type="checkbox" class="custom-control-input" id="customChe">
                                    <label class="custom-control-label" for="customChe">Remember me for this computer</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Login</button>
                        </form>
                        <!-- Forget Password -->
                        <div class="forget_pass mt-15">
                            <a href="#">Forget Password?</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Login Area End -->

@endsection
