@extends('admin::Admin.layouts.Authentication.master')
@section('title','Reset Password')

@section('content')


@if(Session::has('message'))

<div class="alert alert-success" role="alert">
    <strong>Note!</strong> {{ Session::get('message') }}.
</div>
@endif


<!--begin::Wrapper-->
<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" action="{{ route('admin.checkEmailForgetPassword') }}"
        method="POST">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Forgot Password ?</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
            <input class="form-control form-control-solid" type="email" placeholder="example@gmail.com" name="email"
                autocomplete="off" />
            <span class="text-danger">{{$errors->first("email")}}</span>
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="submit" class="btn btn-lg btn-primary fw-bolder me-4">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <a href="{{ route('admin.showloginform') }}" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Wrapper-->
@endsection