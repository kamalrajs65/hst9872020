@extends('layouts.app')

@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 <div class="container">
  <div class="row">
        <div class="col-md-12">
            <h4 class="heading"><strong>View </strong> Blogs <span></span></h4>
            @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        <tbody>

            <?php $i=1; foreach($blog_data as $row_data){
               ?>
                <tr>
                  <th scope="row">{{$i}}</th>
                 <td>{{ $row_data['blog_title']}}</td>
                <td><img src="{{ url('/storage/blog') }}/{{ $row_data['blog_image'] }}" style="width:100px;"></td>
                <td>{{$row_data['status']}}</td>
                <td><a href="{{ url('update_blog')}}/{{ $row_data['id'] }}">Edit </a></td>
              </tr>
            <?php $i++; }   ?>


        </tbody>
        </table>
        </div>
  </div>
</div>
   <script>tinymce.init({selector:'textarea'});</script>
@endsection
