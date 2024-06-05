@extends('layouts.auth')

@section('container')
    <div class="max-w-xs bg-blue-50 overflow-hidden rounded-2xl text-black mx-auto mt-10 shadow-lg">
        <form action="" method="post" class="relative flex flex-col p-8 gap-4 text-center">
        @method('post')
        @csrf
        <span class="font-bold text-xl">Log in</span>
        <div class="overflow-hidden rounded-lg bg-white my-4">
            <input type="text" class="bg-none border-0 outline-0 h-10 w-full border-b border-gray-200 text-sm p-2" placeholder="Username" id="username" name="username">
            <input type="password" class="bg-none border-0 outline-0 h-10 w-full border-b border-gray-200 text-sm p-2" placeholder="Password" id="password" name="password">
        </div>
        <button type="submit" class="bg-teal-600 text-white rounded-full py-2 px-4 text-base font-semibold hover:bg-teal-900 transition-colors duration-300">Log in</button>
        </form>
        <div class="p-4 text-sm bg-blue-100 shadow-inner text-center">
        <p>Don't have an account? <a href="/registration" class="font-bold text-teal-600 transition-colors duration-300 hover:underline">Sign up</a></p>
        </div>
    </div>
@endsection