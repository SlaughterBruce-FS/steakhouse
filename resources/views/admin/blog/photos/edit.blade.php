@extends('layouts.sidebardark.master')
@section('title', 'Add Post')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
@endsection

@section('breadcrumb-title', 'Add Post')
@section('breadcrumb-items')
<li class="breadcrumb-item">Blog</li>
<li class="breadcrumb-item active">Edit Post</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-9">
        <div class="card">
          <div class="card-header">
            <h5>Create Post</h5>
          </div>
          <div class="card-body add-post">
            <form class="row" method="POST" action="{{ route('blog.update', ['slug' => $blog-> slug , 'id' => $blog->id]) }}">
              @csrf
                @method('PUT')
              <div class="col-sm-12">
                <div class="mb-3">
                  <label class="form-label" for="validationCustom01">Title:</label>
                  <input class="form-control"  name="title" type="text" placeholder="Post Title" value="{{old('title', $blog->title)}}" required="">
                  @error('title')
                      <div class="error-sub-text">
                          {{ $message }}
                      </div>
                  @enderror
                  <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Type:</label>
                  <div class="m-checkbox-inline">
                    <label for="edo-ani">
                      <input class="radio_animated" id="edo-ani" name="type" value="text" {{ old('type',  $blog->type) === "text" ? 'checked=""' : ''}} type="radio"  >Text
                    </label>
                    <label for="edo-ani1">
                      <input class="radio_animated" id="edo-ani1" name="type" value="image" {{ old('type',  $blog->type) === "image" ? 'checked=""' : '' }}  type="radio" >Image
                    </label>
                    <label for="edo-ani2">
                      <input class="radio_animated" id="edo-ani2" name="type" value="audio" {{ old('type',  $blog->type) === "audio" ? 'checked=""' : ''}}  type="radio" >Audio
                    </label>
                    <label for="edo-ani3">
                      <input class="radio_animated" id="edo-ani3" name="type" value="video" {{ old('type',  $blog->type) === "video" ? 'checked=""' : ''}}  type="radio" >Video
                    </label>

                  </div>
                </div>
                <div class="mb-3">
                  <div class="col-form-label">Category:
                    <select name="category" id="category" class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
                    <option>{{old('type', $blog->type)}}</option>
                      <option  value="News">News</option>
                      <option value="Music">Music</option>
                    </select>
                  </div>
                </div>
                <div class="email-wrapper">
                  <div class="theme-form">
                    <div class="mb-3">
                      <label class="form-label">Content:</label>
                      <textarea id="text-box" name="description" value="description" cols="10" rows="2"> {{ old('description', $blog->description) }}</textarea>
                      @error('description')
                      <div class="error-sub-text">
                          {{ $message }}
                      </div>
                  @enderror
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
          <div class="card">
            <div class="card-header">
              <h5>Status</h5>
            </div>
            <div class="card-body add-post">
                <div class="col-sm-12">
                  <div class="mb-3">
                    <label class="form-label">Satus</label>
                    <div class="m-checkbox-inline">
                      <label for="edo-ani">
                        <input value="draft" class="radio_animated" id="draft" type="radio" name="status" {{ old('status',  $blog->status) === "draft" ? 'checked=""' : ''}}>Draft
                      </label>
                      <label for="edo-ani1">
                        <input value="publish"class="radio_animated" id="publish" type="radio" {{ old('status',  $blog->status) === "publish" ? 'checked=""' : ''}} name="status">Publish
                      </label>
                      {{--  @selected(old('status', $blog->status))   --}}


                    </div>
                  </div>

                </div>


                {{--  <form class="dropzone digits" id="singleFileUpload" action="/upload.php">
                  <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                    <h6 class="mb-0">Drop files here or click to upload.</h6>
                  </div>
              </form>  --}}
              <div class="mb-3">
              <button class="btn btn-primary" type="submit">Gallery</button>
              </div>
              <div class="btn-showcase">
                <button class="btn btn-primary" type="submit">Save</button>
                <input class="btn btn-light" type="reset" value="Discard">
              </div>
          </form>
            </div>
          </div>
        </div>
    </div>
  </div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/styles.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{asset('assets/js/email-app.js')}}"></script>
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
@endsection
