@extends('layouts.user')

@section('container')
<h5 class="text-slate-500 font-bold lg:text-lg mt-6">Jobs</h5>
<div class="w-full flex flex-col gap-3 lg:flex-row">
<div class="w-full flex flex-col">
        <div class="mt-4 bg-white shadow-md border border-slate-300 w-full h-max flex flex-row overflow-hidden lg:rounded-xl">
            <div class="w-full flex flex-col gap-3 p-3">
                <form action="" class="flex flex-row lg:gap-4">
                    <input type="text" class="bg-white border lg:border-0 rounded-l-lg w-full px-3 py-2 outline-none lg:rounded-lg" placeholder="Find The Jobs" id="job" name="job">
                    <button class="bg-teal-500 px-3 lg:px-6 py-2 lg:py-3 rounded-r-lg text-white font-medium hover:bg-teal-400 hover:duration-150 lg:rounded-lg hidden lg:block">Search</button>
                    <button class="bg-teal-500 px-3 lg:px-6 py-2 lg:py-3 rounded-r-lg text-white font-medium hover:bg-teal-400 hover:duration-150 lg:rounded-lg lg:hidden"><i class="fa fa-solid fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-8 mt-12">
            @foreach ($posts as $i)    
                <a href="/jobs/{{ $i->id }}" class="bg-white shadow-md w-full h-max border border-teal-300 p-6 hover:border-teal-400 hover:duration-150 lg:rounded-xl">
                    <div class="w-full h-20 flex flex-row justify-between gap-4">
                        <div class="w-full flex flex-col h-full">
                            <div class="w-full flex flex-row items-center justify-between">
                                <span class="font-medium text-lg lg:text-xl">{{ $i->title }}</span>
                                <small class="text-slate-500">{{ $i->salary }}/{{ $i->salary_type }}</small>
                            </div>
                            <small class="text-slate-500 font-light lg:text-base">{!! $i->body !!}</small>
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
</div>

@endsection