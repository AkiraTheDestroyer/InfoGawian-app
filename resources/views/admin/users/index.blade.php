@extends('layouts.main')

@section('container')
    <h5 class="my-4 text-xl font-medium lg:text-2xl lg:my-8">Management User</h5>
    <div class="flex flex-col gap-6 pb-6 lg:flex-row">
        <a href="/admin/dashboard/user/create" class="bg-white w-full h-max rounded-3xl overflow-hidden  hover:-translate-y-2 hover:duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,320L48,282.7C96,245,192,171,288,144C384,117,480,139,576,149.3C672,160,768,160,864,170.7C960,181,1056,203,1152,192C1248,181,1344,139,1392,117.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div class="flex flex-row justify-between items-center px-6 pb-2">
                <div class="flex flex-col">
                  <h5 class="text-slate-500 text-lg font-medium">Create User</h5>
                  <small class="text-slate-400">create some and more user.</small>
                </div>
                <div class="text-teal-500 text-4xl">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,320L48,282.7C96,245,192,171,288,144C384,117,480,139,576,149.3C672,160,768,160,864,170.7C960,181,1056,203,1152,192C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </a>
        <a href="/admin/dashboard/user/create" class="bg-white w-full h-max rounded-3xl overflow-hidden  hover:-translate-y-2 hover:duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#06b6d4" fill-opacity="1" d="M0,320L48,282.7C96,245,192,171,288,144C384,117,480,139,576,149.3C672,160,768,160,864,170.7C960,181,1056,203,1152,192C1248,181,1344,139,1392,117.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div class="flex flex-row justify-between items-center px-6 pb-2">
                <div class="flex flex-col">
                  <h5 class="text-slate-500 text-lg font-medium">13340</h5>
                  <small class="text-slate-400">total users.</small>
                </div>
                <div class="text-cyan-500 text-4xl">
                    <i class="fa-solid fa-users-rectangle"></i>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#06b6d4" fill-opacity="1" d="M0,320L48,282.7C96,245,192,171,288,144C384,117,480,139,576,149.3C672,160,768,160,864,170.7C960,181,1056,203,1152,192C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </a>
        <a href="/admin/dashboard/user/create" class="bg-white w-full h-max rounded-3xl overflow-hidden  hover:-translate-y-2 hover:duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eab308" fill-opacity="1" d="M0,320L48,282.7C96,245,192,171,288,144C384,117,480,139,576,149.3C672,160,768,160,864,170.7C960,181,1056,203,1152,192C1248,181,1344,139,1392,117.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div class="flex flex-row justify-between items-center px-6 pb-2">
                <div class="flex flex-col">
                  <h5 class="text-slate-500 text-lg font-medium">1450</h5>
                  <small class="text-slate-400">total admin.</small>
                </div>
                <div class="text-yellow-500 text-4xl">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eab308" fill-opacity="1" d="M0,320L48,282.7C96,245,192,171,288,144C384,117,480,139,576,149.3C672,160,768,160,864,170.7C960,181,1056,203,1152,192C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </a>
        <a href="/admin/dashboard/user/create" class="bg-white w-full h-max rounded-3xl overflow-hidden  hover:-translate-y-2 hover:duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ef4444" fill-opacity="1" d="M0,320L48,282.7C96,245,192,171,288,144C384,117,480,139,576,149.3C672,160,768,160,864,170.7C960,181,1056,203,1152,192C1248,181,1344,139,1392,117.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div class="flex flex-row justify-between items-center px-6 pb-2">
                <div class="flex flex-col">
                  <h5 class="text-slate-500 text-lg font-medium">2500</h5>
                  <small class="text-slate-400">message from users.</small>
                </div>
                <div class="text-red-500 text-4xl">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ef4444" fill-opacity="1" d="M0,320L48,282.7C96,245,192,171,288,144C384,117,480,139,576,149.3C672,160,768,160,864,170.7C960,181,1056,203,1152,192C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </a>
    </div>
    <a href="/admin/dashboard" class="border border-teal-500 w-max h-max px-4 py-2 rounded-xl text-teal-500 font-medium hover:bg-teal-500 hover:text-white hover:duration-150">&laquo; Back Dashboard</a>
    <div class="flex flex-col gap-4 my-4 pb-6 lg:flex-row">
        <div class="w-full h-max bg-white rounded-3xl px-3 py-2 shadow-md lg:w-1/2">
            <h5 class="text-slate-500 text-lg font-medium">List Users</h5>
            <form action="" class="my-3">
                <div class="flex flex-row">
                    <input type="text" name="username" id="username" class="border w-full rounded-l-lg shadow-md px-3 py-2 outline-teal-500" placeholder="Keywords">
                    <button class="bg-teal-500 px-3 py-2 text-white rounded-r-lg hover:bg-teal-400 hover:duration-150"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <table class="w-full text-center text-sm mt-4 lg:text-base ">
                <thead class="border-b">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Action</th>
                </thead>
                <tbody class="">
                    @foreach ($users as $user)                        
                    <tr>
                        <td class="mt-3">{{ $loop->iteration }}</td>
                        <td class="mt-3">{{ $user->username }}</td>
                        <td class="flex flex-row justify-center gap-2 mt-3">
                            <a href="/admin/dashboard/user/{{ $user->id }}" class="border border-teal-500 rounded-lg p-2 text-teal-500 hover:bg-teal-500 hover:text-white hover:duration-150">
                                <i class="fa-solid fa-address-card"></i>
                                <span class="hidden lg:inline">Show</span>
                            </a>
                            <a href="/admin/dashboard/user/{{ $user->id }}/edit" class="border border-yellow-500 rounded-lg p-2 text-yellow-500 hover:bg-yellow-500 hover:text-white hover:duration-150">
                                <i class="fa-solid fa-user-pen"></i>
                                <span class="hidden lg:inline">Edit</span>
                            </a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="border border-red-500 rounded-lg p-2 text-red-500 hover:bg-red-500 hover:text-white hover:duration-150"  data-confirm-delete="true">
                                    <i class="fa-solid fa-user-minus"></i>
                                    <span class="hidden lg:inline">Delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="bg-white w-full lg:w-1/2 h-max rounded-3xl shadow-md overflow-hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,224C384,224,480,160,576,165.3C672,171,768,245,864,266.7C960,288,1056,256,1152,224C1248,192,1344,160,1392,144L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div class="px-6">
                <h5 class="text-slate-500 text-lg font-medium">Profile Card</h5>
                <div class="w-full flex flex-row gap-2 items-center justify-center mt-2 pb-4">
                    <div class="w-16">
                        <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="{{ auth()->user()->username }}" class="rounded-full object-cover">
                    </div>
                    <div class="w-full flex flex-col justify-between lg:flex-row">
                        <div>
                            <p class="text-slate-600 font-medium">{{ auth()->user()->fullname }}({{ auth()->user()->username }})</p>
                            <small class="text-slate-400 font-medium">as {{ auth()->user()->role }}</small>
                            <small class="text-slate-400">registered at {{ auth()->user()->created_at }}</small>
                        </div>
                        <div class="flex justify-end mt-4">
                            <a href="/profile" class="w-max h-max px-4 py-2 rounded-xl font-medium border border-teal-500 text-teal-500 hover:bg-teal-500 hover:text-white hover:duration-150">Go Profile &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
@endsection