@extends('layouts.main')

@section('container')
<h5 class="text-slate-500 font-medium text-xl">Request Company</h5>
<div class="w-full flex flex-col lg:flex-row gap-4">
    <div class="w-full lg:w-1/2 hidden flex-col lg:flex">
        <form action="/admin/dashboard/request/{{ $company->id }}" method="post">
            @method('put')
            @csrf
            <input type="hidden" id="status" name="status" value="active">
            <button type="submit" class="mt-6 bg-white w-full h-max rounded-3xl overflow-hidden shadow-md hover:-translate-y-2 hover:duration-150 text-start">
                <div class="p-6 flex flex-col">
                    <h6 class="text-slate-500 text-4xl font-medium">Accept</h6>
                    <div class="ml-6 text-slate-500">Accept & Confirm Request</div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,128L20,144C40,160,80,192,120,218.7C160,245,200,267,240,266.7C280,267,320,245,360,213.3C400,181,440,139,480,149.3C520,160,560,224,600,240C640,256,680,224,720,213.3C760,203,800,213,840,197.3C880,181,920,139,960,133.3C1000,128,1040,160,1080,165.3C1120,171,1160,149,1200,138.7C1240,128,1280,128,1320,138.7C1360,149,1400,171,1420,181.3L1440,192L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
            </button>
        </form>
        <form action="/admin/dashboard/request/{{ $company->id }}" method="post">
            @method('delete')
            @csrf
            <button class="mt-6 bg-white w-full h-max rounded-3xl overflow-hidden shadow-md hover:-translate-y-2 hover:duration-150 text-start" data-confirm-delete="true">
                <div class="p-6 flex flex-col">
                    <h6 class="text-slate-500 text-4xl font-medium">Delete</h6>
                    <div class="ml-6 text-slate-500">Delete from request</div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ef4444" fill-opacity="1" d="M0,128L20,144C40,160,80,192,120,218.7C160,245,200,267,240,266.7C280,267,320,245,360,213.3C400,181,440,139,480,149.3C520,160,560,224,600,240C640,256,680,224,720,213.3C760,203,800,213,840,197.3C880,181,920,139,960,133.3C1000,128,1040,160,1080,165.3C1120,171,1160,149,1200,138.7C1240,128,1280,128,1320,138.7C1360,149,1400,171,1420,181.3L1440,192L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
            </button>
        </form>
        <a href="/admin/dashboard/request" class="mt-6 bg-white w-full h-max rounded-3xl overflow-hidden shadow-md hover:-translate-y-2 hover:duration-150">
            <div class="p-6 flex flex-col">
                <h6 class="text-slate-500 text-4xl font-medium">Cancel</h6>
                <div class="ml-6 text-slate-500">Cancel to back</div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eab308" fill-opacity="1" d="M0,128L20,144C40,160,80,192,120,218.7C160,245,200,267,240,266.7C280,267,320,245,360,213.3C400,181,440,139,480,149.3C520,160,560,224,600,240C640,256,680,224,720,213.3C760,203,800,213,840,197.3C880,181,920,139,960,133.3C1000,128,1040,160,1080,165.3C1120,171,1160,149,1200,138.7C1240,128,1280,128,1320,138.7C1360,149,1400,171,1420,181.3L1440,192L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
        </a>
    </div>
    <div class="mt-6 w-full h-max bg-white rounded-3xl px-3 py-2 shadow-md p-6">
        <ul class="bg-slate-800 rounded-xl text-teal-500 font-medium flex flex-col gap-3 overflow-hidden">
            <div class="p-4">
                <h5 class="text-lg font-semibold text-teal-400">Request Statistic Company</h5>
                <h5>From {{ $company->user->fullname }}({{ $company->user->username }})</h5>
                <li>
                    Company: <span class="text-slate-400 font-normal">{{ $company->company }}</span>
                </li>
                <li>
                    Description: <span class="text-slate-400 font-normal">{{ $company->desc }}</span> 
                </li>
                <li>
                    Rules: <span class="text-slate-400 font-normal">{{ $company->rules }}</span>          
                </li>
                <div class="flex flex-row justify-evenly mt-6 lg:hidden">
                    <a href="/admin/dashboard/request" class="border border-yellow-500 text-yellow-500 px-3 py-2 rounded-xl hover:bg-yellow-500 hover:text-white hover:duration-150">Cancel</a>
                    <form action="/admin/dashboard/request/{{ $company->id }}" method="post">
                        @method('post')
                        @csrf
                        <button class="border border-red-500 text-red-500 px-3 py-2 rounded-xl hover:bg-red-500 hover:text-white hover:duration-150">Accept</button>
                    </form>
                    <form action="">
                        <button class="border border-teal-500 text-teal-500 px-3 py-2 rounded-xl hover:bg-teal-500 hover:text-white hover:duration-150">Accept</button>
                    </form>
                </div>
            </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,0L40,16C80,32,160,64,240,80C320,96,400,96,480,133.3C560,171,640,245,720,240C800,235,880,149,960,133.3C1040,117,1120,171,1200,186.7C1280,203,1360,181,1400,170.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
            </ul>
    </div>
</div>
@endsection