@extends('admin/layouts/app')
@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create New Post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Post</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Post</h3>
            </div>
            @include('include.message')
            <form role="form" action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="sub_title">Post Sub Title</label>
                                <input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="Enter Sub-Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="slug">Post Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Select Tags</label>
                                <div class="select2-purple">
                                    <select class="select2" multiple="multiple" data-placeholder="Select Tags" data-dropdown-css-class="select2-purple" style="width: 100%;" name="tags[]">
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}">
                                                {{$tag->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Select Categories</label>
                                <div class="select2-purple">
                                    <select class="select2" multiple="multiple" data-placeholder="Select Categories" data-dropdown-css-class="select2-purple" style="width: 100%;" name="categories[]">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">
                                                {{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <label for="body">Post Body</label>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                title="Remove">
                                        <i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body pad">
                                    <div class="mb-3">
                                        <textarea class="textarea" placeholder="Place some text here" name="body" id="body"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="status" value="0">
                        <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                        <label class="form-check-label" for="status">Publish</label>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-left">Submit</button>
                    <a href="{{route('post.index')}}" class="btn btn-primary float-right">Back</a>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection