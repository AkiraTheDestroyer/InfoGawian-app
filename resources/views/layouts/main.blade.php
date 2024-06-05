<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | InfoGawian</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        .trix-button-group.trix-button-group--file-tools {
            display:none;
        }
    </style>
</head>
<body class="bg-sky-50">
    <div id="overlay" class="hidden fixed inset-0 bg-black opacity-50"></div>
    @include('partials.admin.navbar')
    <div class="w-full h-screen flex flex-row pb-4">
        {{-- @include('partials.admin.sidebar') --}}
        <div class="w-full h-max flex flex-col p-6 mb-6" id="container">
            @yield('container')
        </div>
        @include('partials.admin.posts.create')
    </div>

    {{-- <div class="w-ful h-screen flex p-6">
        @include('partials.admin.posts.create')
    </div> --}}
    @include('sweetalert::alert')
    <script src="{{ asset('js/navside.js') }}"></script>
    <script src="{{ asset('js/createPost.js') }}"></script>

    <script>
        document.addEventListener("trix-file-accept", function(event) {
            event.preventDefault();
        });
    </script>
</body>
</html>