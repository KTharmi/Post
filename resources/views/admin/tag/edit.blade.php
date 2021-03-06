@extends('admin/layouts/app')
@section('main-content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create New Tag</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Tag</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tag</h3>
      </div>
      @include('include.message')
      <form role="form" action="{{ route('tag.update',$tag->id)}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="name">Tag Title</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$tag->name}}">
              </div>
            </div>
            <div class="col-lg-6">   
              <div class="form-group">
                <label for="slug">Tag Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{$tag->slug}}">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary float-left">Submit</button>
            <a href="{{route('tag.index')}}" class="btn btn-primary float-right">Back</a>
          </div>
        </form>
      </div>
  </section>
</div>
@endsection