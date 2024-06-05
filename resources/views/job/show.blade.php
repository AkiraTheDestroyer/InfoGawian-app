@extends('layouts.user')

@section('container')
<div class="flex flex-col lg:flex-row">
    <div class="w-full">
        <div class="flex flex-row gap-6 px-6 py-4">
            <img src="{{ asset('storage/'.$post->company->image) }}" alt="{{ $post->company->company }}" class="w-14 h-14 object-cover">
            <div class="flex flex-col">
                <h5 class="font-medium text-xl">{{ $post->title }}</h5>
                <span class="font-medium">{{ $post->company->company }}</span>
                <div class="flex gap-3">
                    @if ($post->status == 'open')
                    <div class="bg-teal-500 text-center px-3 py-2 rounded-lg text-white w-max mt-4">Open</div>
                    @else
                    <div class="bg-red-500 text-center px-3 py-2 rounded-lg text-white w-max mt-4">Close</div>
                    @endif
                    <a href="{{ route('job.apply', $post->id) }}" class="bg-blue-700 text-right px-3 py-2 rounded-lg text-white w-max mt-4 block">Lamar</a>
                </div>
            </div>
        </div>
        <hr class="border-slate-400">
        <div class="px-6 py-4">
            <ul class="text-slate-500 flex flex-col gap-2 my-6">
                <li><i class="fa-solid fa-dollar-sign"></i> {{ $post->salary }} / {{ $post->salary_type }}</li>
                <li><i class="fa-solid fa-dollar-sign"></i> Salary Type {{ $post->salary_type }}</li>
            </ul>
            <div class="flex flex-col gap-2">
                <div class="text-lg lg:text-xl font-medium">Description</div>
                <p>{!! $post->body !!}</p>
            </div>
            <div class="flex flex-col">
                <h5 class="font-medium text-lg lg:tex-xl">About Company</h5>
                <ul class="text-slate-500 mt-4 flex flex-col gap-2">
                    <li><i class="fa-solid fa-building"></i> {{ $post->company->company }}</li>
                    <li>
                        <i class="fa-solid fa-book"></i> {{ $post->company->desc }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="border-slate-400 mt-2 lg:hidden">
    <div class="w-full lg:w-1/2 grid grid-cols-1 gap-4 px-6 py-4">
        <h5 class="font-medium text-lg">Other Job For You</h5>
        @foreach ($posts as $i)
        <a href="/jobs/{{ $i->id }}" class="bg-white shadow-md w-full h-max rounded-lg border border-teal-300 p-6 hover:border-teal-400 hover:duration-150 lg:rounded-xl">
            <div class="w-full h-max flex flex-row justify-between gap-4">
                <div class="w-full flex flex-col h-full">
                    <div class="w-full flex flex-row items-center justify-between lg:flex-col lg:items-start">
                        <span class="font-medium text-lg lg:text-xl">{{ $i->title }}</span>
                        <small class="text-slate-500">{{ $i->salary }}/{{ $i->salary_type }}</small>
                    </div>
                    {{-- <small class="text-slate-500 font-light lg:text-base">{!! $i->body !!}</small> --}}
                </div>
            </div>
            <hr class="border-slate-400">
            <div class="my-4 flex flex-row gap-3 items-center">
                <div class="w-max">
                    <img src="{{ asset('storage/'.$i->company->image) }}" alt="{{ $i->title }}" class="w-10 h-10">
                </div>
                <div>
                    <p class="font-medium">{{ $i->company->company }}</p>
                    <small class="text-slate-500">{{ \Illuminate\Support\Str::limit($i->company->desc, 30, $end='...') }}</small>
                </div>
            </div>
            <small class="w-full text-slate-400 flex justify-end items-end">
                {{ $i->created_at }}
            </small>
        </a>
        @endforeach
    </div>
</div>

@endsection