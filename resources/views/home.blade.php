@extends('user/layouts/appP')
@section('bg-img', asset('user/img/contact-bg.jpg'))
@section('title', 'WELCOME')
@section('sub-title' ,'')
@section('created-at' ,'')
@section('main-content')
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0"></script>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h1 text-align="center">You Are Successfully Loged In. Kindly Welcome To Our Site.</h1>
                <br>
                <h1 text-align="center"> I Am Mathangi Sivananthan.</h1>
            </div>
        </div>
    </div>
</article>
@endsection
