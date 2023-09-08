<x-app-layout>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/../layouts/modern-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/../layouts/modern-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
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
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="/../src/assets/css/light/apps/blog-create.css">
    <link rel="stylesheet" href="/../src/assets/css/dark/apps/blog-create.css">
    <!--  END CUSTOM STYLE FILE  -->




    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">

        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row mb-4 layout-spacing layout-top-spacing">
                    <form class="row" method="POST" action="{{ }}">
                        @csrf
                        @method('PUT')
                        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="widget-content widget-content-area blog-create-section">


                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="post-title"
                                            placeholder="Post Title" name="title" {{--  value="{{ old('title', $portfolio->title) }}">  --}} </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="post-title"
                                                placeholder="Type" name="type" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="post-title"
                                                placeholder="sub title" name="sub_title" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="post-title"
                                                placeholder="Link" name="project_link" value="">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <label>Content</label>
                                            <textarea name="description" class="form-control" id="post-meta-description" cols="10" rows="5"> </textarea>
                                        </div>
                                    </div>

                                </div>



                            </div>

                            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                                <div class="widget-content widget-content-area blog-create-section">
                                    <div class="row">
                                        <div class="col-xxl-12 mb-4">
                                            <div class="switch form-switch-custom switch-inline form-switch-primary">
                                                <input class="switch-input" type="checkbox" role="switch"
                                                    id="showPublicly" checked>
                                                <label class="switch-label" for="showPublicly">Publish</label>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                                <a href="" class="btn btn-success w-100">Photos</a>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                                <button class="btn btn-success w-100">Update Post</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </form>
                </div>

            </div>

        </div>

        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank"
                        href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg></p>
            </div>
        </div>
        <!--  END FOOTER  -->

    </div>
    <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->


    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="/../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="/../src/plugins/src/waves/waves.min.js"></script>
    <script src="/../layouts/modern-dark-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/../src/plugins/src/editors/quill/quill.js"></script>
    <script src="/../src/plugins/src/filepond/filepond.min.js"></script>
    <script src="/../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="/../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="/../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="/../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="/../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="/../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="/../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>

    <script src="/../src/plugins/src/tagify/tagify.min.js"></script>

    <script src="/../src/assets/js/apps/blog-create.js"></script>

    <!-- END PAGE LEVEL SCRIPTS -->
    {{--  <!-- END PAGE LEVEL SCRIPTS -->  --}}

</x-app-layout>
