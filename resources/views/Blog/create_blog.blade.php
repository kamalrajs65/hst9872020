@extends('layouts.app')

@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 <div class="container">
  <div class="row">
    <div class="col-md-10">
          <form action="{{ url('createblog') }}" method="post" enctype="multipart/form-data">
            <h4 class="heading"><strong>Create </strong> Blog <span></span></h4>
          @csrf
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Blog Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-lg" id="blog_title" name="blog_title" value="{{ old('blog_title') }}" placeholder="Blog title">
                          <p class="error">@error('blog_title'){{$message}} @enderror</p>
                        </div>

                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Blog Image</label>
                        <div class="col-sm-4">
                          <input type="file" name="blog_image" class="form-control form-control-lg" id="blog_image" placeholder="Blog title" value="{{ old('blog_image') }}">
                          <p class="error">@error('blog_image'){{$message}} @enderror</p>
                        </div>

                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Blog description</label>
                        <div class="col-sm-10">

                          <textarea name="blog_description" id="blog_description" rows="10" class="summernote">{{ old('blog_description') }}</textarea>
                          <p class="error">@error('blog_description'){{$message}} @enderror</p>
                        </div>

                 </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Blog status</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="status">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                        <div class="col-sm-4">
                          <input type="submit" class="btn btn-primary" value="Save blog">
                        </div>
                </div>


          </form>
    </div>

  </div>
</div>
   <script>tinymce.init({selector:'textarea'});</script>
@endsection
