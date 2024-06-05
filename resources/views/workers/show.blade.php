@extends('layouts.user')

@section('container')
    <h5 class="text-slate-500 font-medium text-xl">{{ $worker->fullname }}</h5>
    <div class="w-full h-max p-6 bg-white rounded-3xl mt-6">
        <div class="bg-slate-800 p-4 rounded-lg flex flex-col gap-10 lg:flex-row">
            <div class="w-1/3">
                <img src="{{ asset('storage/'.$worker->image) }}" alt="{{ $worker->username }}" class="w-full object-cover">
            </div>
            <div>
                <h5 class="font-medium text-teal-500">{{ $worker->fullname }}</h5>
                <p class="text-sm text-slate-400">{{ $worker->whatsapp }}/{{ $worker->email }}</p>
                <br>
                <div class="flex flex-col">
                    <span class="text-slate-400 font-medium">Bio</span>
                    <div class="text-slate-400">{{ $worker->bio }}</div>
                </div>
            </div>
        </div>
        <div class="p-4">
            <form action="">
                <button class="bg-teal-500 px-3 py-2 rounded-lg text-white font-medium hover:bg-teal-400 hover:duration-150">Accept</button>
            </form>
        </div>
    </div>
@endsection