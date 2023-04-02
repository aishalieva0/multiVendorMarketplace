@extends('layouts.frontend.master')
@section('content')
    <!-- Register Area -->
    <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="login_form mb-50">
                        <h5 class="mb-3">Sign up</h5>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="role_id" class="col-md-3 col-form-label text-md-right">I want to:</label>
                                <div class="col-md-9">
                                    <select class="form-control w-100" id="role_id" name="role_id">
                                        <option value="3">Sign up as Customer</option>
                                        <option value="2">Sign up as Seller</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="surname" placeholder="Surname">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation"
                                       placeholder="Repeat Password">
                            </div>

                            <!-- additional fields for vendors -->
                            <div class="form-group" id="vendorFields" style="display:none;">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="shop_name" placeholder="Shop name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" placeholder="City">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#role_id').on('change', function () {
                    if ($(this).val() === '3') {
                        document.getElementById("vendorFields").style.display = "none";
                    } else if ($(this).val() === '2') {
                        document.getElementById("vendorFields").style.display = "block";
                    }
                });
            });
        </script>
    </div>
    <!-- Register Area End -->
@endsection
