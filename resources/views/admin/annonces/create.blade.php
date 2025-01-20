@extends('layouts.admin')

@section('title', 'Annonces')

@push('css')
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}


    <!---Internal Fileupload css-->
    <link href="{{ asset('admin/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

    <!---Internal Fancy uploader css-->
    <link href="{{ asset('admin/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

    <style>
        .ff_fileupload_uploads .ff_fileupload_summary {
            padding: 0 0 0 1em;
            font-size: 0.9em;
            white-space: normal;
            color: #7a8082;
        }

        .ff_fileupload_uploads div {
            /* vertical-align: top; */
            padding: 5px;
            /* white-space: nowrap;
            line-height: normal; */
        }
        .ff_fileupload_uploads .ff_fileupload_preview .ff_fileupload_preview_image {
            display: block;
            box-sizing: border-box;
            border: 0 none;
            padding: 0;
            background-color: #DDDDDD;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            width: 50px;
            height: 50px;
            border-radius: 5px;
            opacity: 0.75;
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            color: #222222;
            overflow: hidden;
            outline: none;
            cursor: default;
        }

        .ff_fileupload_uploads .ff_fileupload_summary .ff_fileupload_filename input {
            box-sizing: border-box;
            width: 100%;
            padding: 0.3em;
            margin-bottom: 0.1em;
            font-size: 1.0em;
            font-weight: normal;
            line-height: normal;
            border: 0px solid #e8ebf3;
            border-radius: 0;
            box-shadow: none;
            color: #080e1b;
            font-weight: 600;
        }

        .ff_fileupload_uploads .ff_fileupload_actions button.ff_fileupload_start_upload {
            margin-right: 0.5em;
        }

        .ff_fileupload_uploads .ff_fileupload_actions button {
            display: inline-block;
            vertical-align: top;
            width: 26px;
            height: 26px;
            box-sizing: border-box;
            border: 1px solid #efecec;
            border-radius: 3px;
            padding: 0;
            background-color: #e8ebf3;
            background-repeat: no-repeat;
            background-position: center center;
            opacity: 0.85;
            cursor: pointer;
            outline: none;
        }

        .ff_fileupload_uploads .ff_fileupload_summary .ff_fileupload_progress_background {
            margin-top: 0.5em;
            background-color: #CCCCCC;
            height: 2px;
        }

        .ff_fileupload_uploads .ff_fileupload_summary .ff_fileupload_errors {
            color: #A94442;
            font-weight: bold;
        }
    </style>

@endpush



@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Creation d'annonces</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ formulaire</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
    @livewire('manage-annonce',['annonceId' => $postId])

@endsection

@push('scripts')

    <!--Internal Fileuploads js-->
    <script src="{{ asset('admin/plugins/fileuploads/js/fileupload.js')}}"></script>
    {{-- <script src="{{ asset('admin/plugins/fileuploads/js/file-upload.js')}}"></script> --}}

    <!--Internal Fancy uploader js-->
    <script src="{{ asset('admin/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{ asset('admin/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{ asset('admin/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{ asset('admin/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    {{-- <script src="{{ asset('admin/plugins/fancyuploder/fancy-uploader.js')}}"></script> --}}

    <script>
        $(document).ready(function() {
            // Set up CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        });

        document.addEventListener('livewire:init', function () {
            console.log( event);
            // Initialize File Uploads
             initFileUpload();


        });

         // Listen for Livewire updates if necessary
         document.addEventListener('component.updated', function(event) {

            console.log('fffffff') ;
            // Re-initialize plugins if needed
            initFileUpload();
        });


        function initFileUpload() {
            $(document).ready(function() {
            // Initialize your file upload plugin here
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (2M max).'
                }
            });

            // Fancy uploader initialization
            $('#demo').FancyFileUpload({
                params : {
                    action : 'fileuploader'
                    },
                maxfilesize : 1000000, // Set max file size to 1MB
                onComplete: function (response) {
                    console.log('Upload complete:', response);
                    // Handle the response from the server here
                },
                onError: function (error) {
                    console.error('Error during upload:', error);
                    // Handle any errors here
                }
            });

            console.log("hhhhhhhhhhhhhhhhhhh")
        });
        }

    </script>
@endpush
