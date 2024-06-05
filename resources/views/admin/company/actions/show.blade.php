@extends('layouts.main')

@section('container')
    <h5 class="text-lg text-slate-500 font-medium">Pt. Lorem, ipsum dolor.</h5>
    <div class="mt-6">
        <a href="/admin/dashboard/company" class="border border-yellow-500 py-2 px-6 rounded-xl font-medium text-yellow-500 hover:bg-yellow-500 hover:text-white hover:duration-150">Back</a>
    </div>
    <div class="mt-6 w-full h-max bg-white rounded-3xl shadow-md overflow-hidden p-6 flex flex-col gap-4 lg:flex-row">
        <div class="w-1/3">
            <img src="{{ asset('storage/'.$company->image) }}" alt="{{ $company->company }}" class="object-cover">
        </div>
        <ul class="w-full bg-slate-800 rounded-xl text-teal-500 font-medium flex flex-col gap-3 overflow-hidden">
            <div class="p-4">
                <h5 class="text-lg font-semibold text-teal-400">Statistic Company</h5>
                <li>
                    Company: <span class="text-slate-400 font-normal">{{ $company->company }}</span>
                </li>
                <li>
                    Description: <span class="text-slate-400 font-normal">{{ $company->desc }}</span> 
                </li>
                <li>
                    Rules: <span class="text-slate-400 font-normal">{!! $company->rules !!}</span>          
                </li>
            </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,0L40,16C80,32,160,64,240,80C320,96,400,96,480,133.3C560,171,640,245,720,240C800,235,880,149,960,133.3C1040,117,1120,171,1200,186.7C1280,203,1360,181,1400,170.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
            </ul>
    </div>
@endsection