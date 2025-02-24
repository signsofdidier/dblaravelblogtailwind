<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
        content="Tailwind Multipurpose Admin & Dashboard Template"
        name="description"
    />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />


    {{--<link rel="stylesheet" href="assets/css/icons.css" />--}}
    {{--<link rel="stylesheet" href="assets/css/tailwind.css" />--}}
    @vite(['resources/css/tailwind.css', 'resources/css/icons.css', 'resources/css/simple-datatables.css', 'resources/js/app.js'])
</head>
