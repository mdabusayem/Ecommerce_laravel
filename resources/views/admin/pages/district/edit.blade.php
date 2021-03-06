@extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit District
        </div>
        <div class="card-body">
          <form action="{{ route('admin.district.update',$district->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.partials.messages')
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $district->name }}" >
            </div>
           
             <div class="form-group">
              <label for="exampleInputEmail1">Select Division</label>
              <select class="form-control" name="division_id">
                <option value="">Select Division</option>
                @foreach($divisions as $division)
                <option value="{{ $division->id }}"  @if($division->id==$district->division_id) selected @endif >{{ $division->name }}</option>
                @endforeach
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Update District</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
