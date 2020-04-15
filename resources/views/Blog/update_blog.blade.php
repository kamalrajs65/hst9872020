@extends('layouts.app')

@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 <div class="container">
  <div class="row">
    <div class="col-md-10">
          <form action="{{ url('save_blog') }}" method="post" enctype="multipart/form-data">
            <h4 class="heading"><strong>Update </strong> Blog <span></span></h4>
          @csrf
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Blog Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-lg" id="blog_title" name="blog_title" value="{{ $blog_data['blog_title'] }}" placeholder="Blog title" >
                          <input type="hidden" class="form-control form-control-lg" id="id" name="id" value="{{ $blog_data['id'] }}">
                          <input type="hidden" class="form-control form-control-lg" id="blog_old_image" name="blog_old_image" value="{{ $blog_data['blog_image'] }}">
                          <p class="error">@error('blog_title'){{$message}} @enderror</p>
                        </div>

                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Blog Image</label>
                        <div class="col-sm-4">
                          <input type="file" name="blog_image" class="form-control form-control-lg" id="blog_image" placeholder="Blog title" value="{{ old('blog_image') }}">
                          <p class="error">@error('blog_image'){{$message}} @enderror</p>
                        </div>
                        OR
                        <div class="col-sm-4">
                          <img src="{{ url('/storage/blog') }}/{{ $blog_data['blog_image'] }}" style="width:100px;">
                        </div>

                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Blog description</label>
                        <div class="col-sm-10">

                          <textarea name="blog_description" id="blog_description" rows="10" class="summernote">{{ $blog_data['blog_description'] }}</textarea>
                          <p class="error">@error('blog_description'){{$message}} @enderror</p>
                        </div>

                 </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Blog status</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="status">
                            <option value="Active" @if ($blog_data['status'] == "Active") {{ 'selected' }} @endif>Active</option>
                            <option value="Inactive" @if ($blog_data['status'] == "Inactive") {{ 'selected' }} @endif>Inactive</option>
                          </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                        <div class="col-sm-4">
                          <input type="submit" class="btn btn-primary" value="Update blog">
                        </div>
                </div>


          </form>
    </div>

  </div>
</div>
   <script>tinymce.init({selector:'textarea'});</script>
@endsection
