@extends('layouts.app')

@section('title', 'Sliders')



@section('pagestyles')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" href="../src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="../src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/tagify/tagify.css">

    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/tagify/custom-tagify.css">
    <link href="../src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/tagify/custom-tagify.css">
    <link href="../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="../src/assets/css/light/apps/blog-create.css">
    <link rel="stylesheet" href="../src/assets/css/dark/apps/blog-create.css">
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
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row mb-4 layout-spacing layout-top-spacing">
                    <form class="row" method="POST" action="{{ route('blogs.store') }}">
                        @csrf
                        <div class="col-xxl-9
                        col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="widget-content widget-content-area blog-create-section">



                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="title" id="post-title"
                                            placeholder=" Title">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group row invoice-created-by">

                                        <div class="col-sm-12">

                                            <select name="category" class="form-select country_code  form-control-sm"
                                                id="category">
                                                <option value="" selected>Choose Category</option>
                                                <option value="News">News</option>
                                                <option value="Music">Music</option>
                                                <option value="Laravel">Laravel</option>
                                                <option value="React">React</option>
                                                <option value="Tech">Tech</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="form-group row invoice-created-by">

                                        <div class="col-sm-12">

                                            <select name="type" class="form-select country_code  form-control-sm"
                                                id="type">
                                                <option value="" selected>Choose Type</option>
                                                <option value="text">Text</option>
                                                <option value="video">Video</option>
                                                <option value="audio">Audio</option>
                                                <option value="image">Image</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">

                                    <div class="col-xxl-12">

                                        <label for="post-meta-description">Message</label>
                                        <textarea name="description" class="form-control" id="description" cols="10" rows="5"></textarea>
                                    </div>
                                </div>



                            </div>



                        </div>

                        <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                            <div class="widget-content widget-content-area blog-create-section">
                                <div class="row">

                                    <div class="col-xxl-12 mb-4">

                                        <div class="switch form-switch-custom switch-inline form-switch-primary">
                                            <input class="switch-input" name="status" type="checkbox" role="switch"
                                                id="showPublicly" checked>
                                            <label class="switch-label" for="showPublicly">Publish</label>
                                        </div>
                                    </div>

                                    {{--  <div class="mb-3">
                                        <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                            <a href="{{ route('blogs.photos') }}"
                                                class="btn btn-primary w-100">Gallery</a>
                                        </div>
                                    </div>  --}}

                                    <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                        <button class="btn btn-success w-100">Create Post</button>
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
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/modern-dark-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../src/plugins/src/editors/quill/quill.js"></script>

    <script src="../src/plugins/src/tagify/tagify.min.js"></script>

    <script src="../src/assets/js/apps/blog-create.js"></script>

    <!-- END PAGE LEVEL SCRIPTS -->
    {{--  <!-- END PAGE LEVEL SCRIPTS -->  --}}
@endsection
