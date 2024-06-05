@extends('layouts.user')

@section('container')
    <h5 class="text-slate-500 font-medium text-xl">{{ $company->company }}</h5>
    <div class="w-full h-max p-6 bg-white rounded-xl mt-6 border border-teal-300">
        <div class="p-4 rounded-lg gap-8 flex flex-col lg:flex-row">
            <div class="w-max">
                <img src="{{ asset('storage/'.$company->image) }}" alt="{{ $company->company }}" class="w-40 h-40 object-cover">
            </div>
            <div class="w-max">
                <h5 class="font-bold text-xl lg:text-2xl">{{ $company->company }}</h5>
                <p class="text-sm text-slate-400 lg:text-base">{{ $company->desc }}</p>
                <br>
                <div class="flex flex-col">
                    <span class="text-slate-400 font-medium">Rules company</span>
                    <div class="text-slate-400">{!! $company->rules !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection