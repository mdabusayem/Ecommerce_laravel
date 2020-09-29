@extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Category
        </div>
        <div class="card-body">
          <form action="{{ route('admin.category.update',$category->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.partials.messages')
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $category->name }}" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control">{{ $category->description }}</textarea>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Category Image</label>
              <div class="row">
                <div class="col-md-4">
                  <input type="file" class="form-control" name="category_image" id="category_image" >
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
