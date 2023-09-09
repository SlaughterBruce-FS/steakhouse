@extends('layouts.app')

@section('title', 'Sliders Create')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@section('pagestyles')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/../../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/../../layouts/modern-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/../../layouts/modern-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->



    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->



    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link rel="stylesheet" href="/../src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="/../src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link rel="stylesheet" type="text/css" href="/../src/plugins/src/tagify/tagify.css">

    <link rel="stylesheet" type="text/css" href="/../src/assets/css/light/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="/../src/plugins/css/light/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="/../src/plugins/css/light/tagify/custom-tagify.css">
    <link href="/../src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="/../src/assets/css/dark/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="/../src/plugins/css/dark/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="/../src/plugins/css/dark/tagify/custom-tagify.css">
    <link href="/../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />


    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="{{ asset('src/assets/css/light/apps/blog-create.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/css/dark/apps/blog-create.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
@endsection








@section('content')


    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">



            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Datatables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Striped</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row layout-top-spacing">

                    <form class="row" method="POST" action="{{ route('discount.update', ['id' => $discount->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="widget-content widget-content-area blog-edit-section">




                                {{--  <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="post-title" placeholder="Type"
                                            name="type" value="{{ old('sub_title', $discountr->sub_title) }}">
                                    </div>
                                </div>  --}}
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label for="post-title">Percent Off</label>
                                        <input type="text" class="form-control" id="sub_title"
                                            value="{{ old('percent_off', $discount->percent_off) }}" name="percent_off">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label for="post-title">Amount Off</label>
                                        <input type="text" class="form-control" id="sub_title"
                                            value="{{ old('amount_off', $discount->amount_off) }}" name="amount_off">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label for="post-title">Title</label>
                                        <input type="text" class="form-control" id="title"
                                            value="{{ old('itle', $discount->title) }}" name="title">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label for="post-title">Description</label>
                                        <input type="text" class="form-control" id="description"
                                            value="{{ old('description', $discount->description) }}" name="description">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group row invoice-created-by">
                                        <label for="payment-method-country"
                                            class="col-sm-12 col-form-label col-form-label-sm">Status</label>
                                        <div class="col-sm-12">
                                            <select name="status" class="form-select country_code  form-control-sm"
                                                id="status">

                                                <option value="active"
                                                    {{ old('pell', $discount->status) == 'active' ? 'selected' : '' }}>
                                                    active</option>
                                                <option value="not active"
                                                    {{ old('pell', $discount->status) == 'not active' ? 'selected' : '' }}>
                                                    not active
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label for="post-title">Price</label>
                                        <input type="text" class="form-control" id="price"
                                            value="{{ old('price', $discount->price) }}" name="price">
                                    </div>
                                </div>



                            </div>



                        </div>

                        <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                            <div class="widget-content widget-content-area blog-edit-section">
                                <div class="row">

                                    {{--  <div class="col-xxl-12 col-md-12 mb-4">

                                        <label for="product-images">Featured Image</label>
                                        <div class="multiple-file-upload">
                                            <input type="file" class="filepond file-upload-multiple"
                                                name="image" id="product-images"
                                                value="{{ old('image', $discountr->image) }}" multiple
                                                data-allow-reorder="true" data-max-file-size="3MB"
                                                data-max-files="5">
                                        </div>

                                    </div>  --}}

                                    <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                        <button class="btn btn-success w-100">Update</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>



    </div>
    <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
@endsection


@section('pagescripts')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="/../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="/../src/plugins/src/waves/waves.min.js"></script>
    <script src="/../layouts/modern-dark-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    {{--  <script src="/../src/plugins/src/editors/quill/quill.js"></script>  --}}
    {{--  <script src="/../src/plugins/src/filepond/filepond.min.js"></script>
<script src="/../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
<script src="/../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
<script src="/../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
<script src="/../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
<script src="/../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
<script src="/../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
<script src="/../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>  --}}

    <script src="/../src/plugins/src/tagify/tagify.min.js"></script>

    {{--  <script src="/../src/assets/js/apps/blog-create.js"></script>  --}}

    <!-- END PAGE LEVEL SCRIPTS -->
    {{--  <!-- END PAGE LEVEL SCRIPTS -->  --}}
@endsection
