@extends('layouts.admin')

@section('title', 'Annonces')

@push('css')
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

  
    <!---Internal Fileupload css-->
    <link href="{{ asset('admin/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
   
    <!---Internal Fancy uploader css-->
    <link href="{{ asset('admin/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />


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
