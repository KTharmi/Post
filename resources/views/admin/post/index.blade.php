@extends('admin/layouts/app')
@section('main-content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Post Details</h1>
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
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><a href="{{route('post.create')}}" class="btn btn-default">Add New</a></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        <div class="card">
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Sub-Title</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->sub_title}}</td>
                    <td>{{$post->slug}}</td>
                    <td align="center"><a href="{{route('post.edit', $post->id)}}"><i class="nav-icon fas fa-edit"></i></a></td>
                    <td align="center">
                      <form action="{{route('post.destroy', $post->id)}}" style="display:none" id="delete-form-.{{$post->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                      </form>
                      <a href="{{route('post.index')}}" onclick="if(confirm('Are You Sure, You Want To Delete This?'))
                                                                    {event.preventDefault();document.getElementById('delete-form-.{{$post->id}}').submit();}
                                                                  else
                                                                  {event.preventDefault();}
                                                                  "><i class="nav-icon fas fa-trash"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Sub-Title</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection