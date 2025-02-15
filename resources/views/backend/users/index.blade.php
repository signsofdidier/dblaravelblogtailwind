@extends('layouts.backend')
@section('infocards')
@endsection
@section('content')
    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
        {{-- Eerste table --}}
        <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
            @include('layouts.partials.form_error')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="relative overflow-x-auto sm:rounded">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="datatable_1">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    photo_id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    E-mail
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created At
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Deleted At
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($users)
                                @foreach($users as $user)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-slate-700/50">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{$user->id}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$user->photo_id}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$user->name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$user->email}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$user->role_id ? $user->role->name : 'Users without role'}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$user->is_active == 1 ? 'Active' : 'Inactive'}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$user->created_at->diffForHumans()}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$user->updated_at->diffForHumans()}}
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <button type="button" class="focus:outline-none focus:bg-opacity-50 focus:text-black hover:text-black  text-indigo-700 hover:bg-opacity-50 bg-gray-100 dark:bg-slate-700 dark:text-slate-300 dark:hover:text-slate-200 text-sm font-medium py-2 px-3 rounded csv">Export CSV</button>
                        <button type="button" class="focus:outline-none focus:bg-opacity-50 focus:text-black hover:text-black  text-indigo-700 hover:bg-opacity-50 bg-gray-100 dark:bg-slate-700 dark:text-slate-300 dark:hover:text-slate-200 text-sm font-medium py-2 px-3 rounded sql">Export SQL</button>
                        <button type="button" class="focus:outline-none focus:bg-opacity-50 focus:text-black hover:text-black  text-indigo-700 hover:bg-opacity-50 bg-gray-100 dark:bg-slate-700 dark:text-slate-300 dark:hover:text-slate-200 text-sm font-medium py-2 px-3 rounded txt">Export TXT</button>
                        <button type="button" class="focus:outline-none focus:bg-opacity-50 focus:text-black hover:text-black  text-indigo-700 hover:bg-opacity-50 bg-gray-100 dark:bg-slate-700 dark:text-slate-300 dark:hover:text-slate-200 text-sm font-medium py-2 px-3 rounded json">Export JSON</button>
                    </div>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div><!--end col-->

    </div><!--end inner-grid-->
@endsection
