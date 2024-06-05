@extends('layouts.main')

@section('container')
<div class="bg-white w-full min-h-max rounded-3xl shadow-md overflow-hidden">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,224C384,224,480,160,576,165.3C672,171,768,245,864,266.7C960,288,1056,256,1152,224C1248,192,1344,160,1392,144L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="px-6">
        <h5 class="text-slate-500 text-lg font-medium lg:text-xl">Profile Card</h5>
        <div class="w-full flex flex-col lg:flex-row my-6 gap-3">
            <div class="w-full flex flex-col gap-3 bg-slate-800 p-3 rounded-lg">
                <div class="w-24"> 
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsPUEdlaqIwNG_xq3PtlWjuD_kxkV7ovsmcQ&usqp=CAU" alt="" class="rounded-full w-16 lg:w-20">
                </div>
                <div class="w-full flex flex-col lg:flex-row lg:justify-between">
                    <div class="flex flex-col text-slate-400 text-sm font-medium">
                        <span class="lg:text-lg text-white">{{ $user->fullname }}({{ $user->username }})</span>
                        @if($user->bio == null)
                        <small class="lg:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi commodi sapiente amet laboriosam. Porro, laudantium!</small>
                        @else
                        <small class="lg:text-base">{{ $user->bio }}</small>
                        @endif
                        @if($user->email == null)
                        <small class="lg:text-base">email not adding</small>
                        @else
                        <small class="lg:text-base">{{ $user->email }}</small>
                        @endif
                        @if($user->whatsapp == null)
                        <small class="lg:text-base capitalize">whatsapp not adding</small>
                        @else
                        <small class="lg:text-base capitalize">{{ $user->whatsapp }}</small>
                        @endif
                        <small class="lg:text-base capitalize">{{ $user->role }}</small>
                        <small class="lg:text-base">Registered at {{ $user->created_at }}</small>
                    </div>
                </div>
                <div class="mt-4 flex flex-row justify-between gap-3">
                    <a href="/admin/dashboard/user" class="border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-white rounded-xl px-4 py-2">&laquo; Back</a>
                    <a href="" class="border border-teal-500 text-teal-500 hover:bg-teal-500 hover:text-white rounded-xl px-4 py-2"> Profile &raquo;</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection