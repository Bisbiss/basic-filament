<html>
    <head>
        <title>Bisblog</title>
        <meta  name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta  content="Bisblog - Learn Filament Basic"  name="description"/>
        <meta content="" name="Bisblog" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ './assets/images/favicon.ico' }}" />
        
        <!-- Css -->
        <!-- Main Css -->
        <link rel="stylesheet" href="{{ './assets/libs/icofont/icofont.min.css' }}">
        <link rel="stylesheet" href="{{ './assets/css/tailwind.min.css' }}">
    </head>
    <body class="bg-[#ECEFF2] dark:bg-gray-900">
        @yield('content')
        <script src="{{ './assets/libs/lucide/umd/lucide.min.js' }}"></script>
        <script src="{{ './assets/libs/simplebar/simplebar.min.js' }}"></script>

        <script src="{{ './assets/js/app.js' }}"></script> 
    </body>
</html>