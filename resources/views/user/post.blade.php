@extends('user/layouts/appP')
@section('bg-img', asset('user/img/post-bg.jpg'))
@section('title', $post->title)
@section('sub-title' ,$post->sub_title)
@section('created-at' ,$post->created_at)
@section('main-content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0"></script>
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small class="float-left">Posted at - {{$post->created_at->diffForHumans()}}</small>
          @foreach($post->categories as $category)
            <small class="float-right">
              <a href="{{route('category', $category->slug)}}"><i class="far fa-circle small"></i>&nbsp;{{$category->name}} &nbsp;</a>
            </small>
          @endforeach
          {!!htmlspecialchars_decode($post->body)!!}
          <h6>Tag Clouds</h6>
          @foreach($post->tags as $tag)
            <a href="{{route('tag', $tag->slug)}}"><small class="float-left" style="margin-right:20px; border-radius:5px; border:1px solid gray; padding:5px;">{{$tag->name}}</small></a>
          @endforeach
          <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="10" data-width=""></div>
        </div>
      </div>
    </div>
  </article>
@endsection

