<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('assets/admin/assets/images/favicon.png')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Finate - Job Portal Website Template Using Bootstrap 5"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>zimboflix</title>
    
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('assets/admin/assets/css/theme.css')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="nk-body bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
       
        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
    </div>

    <script>
$(document).ready(function() {
    $('#countries').select2({
        placeholder: 'Select a country',
        ajax: {
            url: 'https://restcountries.com/v2/all',
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term,
                };
            },
            processResults: function(data) {
                var results = [];
                $.each(data, function(index, item) {
                    results.push({
                        id: item.alpha2Code,
                        text: item.name,
                    });
                });
                return {
                    results: results,
                };
            },
            cache: true,
        },
        minimumInputLength: 1,
    });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#has_parent').change(function() {
            if ($(this).is(':checked')) {
                $('#parent_production').show();
            } else {
                $('#parent_production').hide();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#category_id').change(function() {
            var selectedCategory = $(this).val();
            if (selectedCategory == 2) { // Replace 2 with the ID of the "TV show" category
                $('#season_input').show();
            } else {
                $('#season_input').hide();
            }
        });
    });
</script>
<script>
    function handleFileChange(event) {
        const fileInput = event.target;
        const progressBar = document.getElementById('uploadProgress');

        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            const formData = new FormData();
            formData.append('file', file);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ url('/tvproductions') }}');
            xhr.upload.addEventListener('progress', function (event) {
                if (event.lengthComputable) {
                    const percentComplete = (event.loaded / event.total) * 100;
                    progressBar.value = percentComplete;
                }
            });
            xhr.addEventListener('load', function () {
                progressBar.value = 100;
            });
            xhr.send(formData);
        }
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="{{asset('assets/admin/assets/js/bundle.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/charts/gd-default.js')}}"></script>
</body>
</html>
