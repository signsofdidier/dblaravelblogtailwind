@extends('layouts.backend')
@section('title')
    Create User
@endsection
@section('content-top')
@endsection
@section('infocards')
@endsection
@section('content')
    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
        <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
            @include('layouts.partials.form_error')
            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Create new user</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form method="POST" action="{{ action('App\Http\Controllers\UserController@store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="label">Your name</label>
                            <input type="text" id="name" class="form-control" value="{{old('name')}}">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="label">Your email</label>
                            <input type="text" id="email" class="form-control" value="{{ old('email') }}">
                        </div>
                        <div class="mb-6">
                            <label for="role_id" class="label">Select roles:</label>
                            <select name="role_id" id="role_id" class="form-control">
                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}" {{ old('role_id') == $id ? 'selected' : '' }}>
                                        {{ $role }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="is_active" class="label">Select status:</label>
                            <select name="is_active" id="is_active" class="form-control">
                                <option value="1" {{ old('is_active') == "1" ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('is_active') == "0" ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="password" class="label">Your password</label>
                            <input type="password" id="password" class="form-control">
                        </div>
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="photo_id">Upload file</label>
                            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-200 cursor-pointer p-1 dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="photo_id" name="photo_id" type="file">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile picture is useful to confirm your are logged into your account</div>
                        </div>
                        <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Create User</button>
                    </form>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div><!--end col-->

    </div><!--end inner-grid-->
@endsection
