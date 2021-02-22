@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-6 col-md-4  mx-auto">

            <form dir="rtl">
                <div class="form-group">
                    <label for="exampleInputEmail1">آدرس ایمیل</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">فقط ایمیل شخصی خود را استفاده کنید</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">رمز عبور</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input mr-0" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="d-flex flex-row">
                    <button type="submit" class="btn btn-primary ml-auto">Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection