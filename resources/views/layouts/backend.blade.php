<!DOCTYPE html>
<html lang="en" dir="ltr" class="">

@include('layouts.partials.head')

<body data-layout-mode="light" class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">


@include('layouts.partials.navbar')

<div class="container  mx-auto px-2">
    <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-wrap justify-between">
                        <div class="items-center ">
                            <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Dashboard</h1>
                            <ol class="list-reset flex text-sm">
                                <li><a href="#" class="text-gray-500">T-Wind</a></li>
                                <li><span class="text-gray-500 mx-2">/</span></li>
                                <li class="text-gray-500">Dashboard</li>
                                <li><span class="text-gray-500 mx-2">/</span></li>
                                <li class="text-blue-600 hover:text-blue-700">Analytics</li>
                            </ol>
                        </div>
                        <div class="flex items-center">
                            <a href="{{route('users.create')}}" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Create New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div><!--end container-->
<div class="container mx-auto px-2  min-h-[calc(100vh-138px)]  relative pb-14">

    @yield('content-top', View::make('layouts.partials.content-top'))
    @yield('content')
    @yield('infocards', View::make('layouts.partials.infocards'))
    @include('layouts.partials.footer')

    <div class="container mx-auto px-2">
        </div>
    </div>


</div><!--end container-->

</body>

</html>
