<nav class="bg-white w-full h-14 lg:h-16 flex flex-row items-center justify-between px-6 lg:px-16 py-6 border-b border-slate-300">
    <div class="flex flex-row gap-24">
        <div class="">
            <a href="/" class="font-semibold text-xl lg:text-2xl">InfoGawian.</a>
        </div>
        <div class="flex flex-row gap-10 justify-center items-center">
            <ul class="hidden lg:flex flex-row gap-8">
                <li>
                    <a href="/" class="{{ $active == 'home' ? 'text-teal-500' : '' }}"></i> Home</a>
                </li>
                <li>
                    <a href="/company" class="{{ $active == 'company' ? 'text-teal-500' : '' }}">Company</a>
                </li>
                {{-- <li>
                    <a href="/worker" class="{{ $active == 'worker' ? 'text-teal-500' : '' }}">Workers</a>
                </li> --}}
            </ul>
        </div>
    </div>
    <div>
        @if (auth()->user())            
        {{-- <a href="/jobs" class="{{ $active == 'jobs' ? 'text-teal-500' : '' }} font-light"><i class="fa-solid fa-hammer"></i> Jobs</a> --}}
        {{-- <a href="/message" class="font-light relative">
            <i class="fa-solid fa-message"></i> 
            <span class="hidden lg:inline-block">Message</span>
            <div class="absolute left-2 top-2 lg:left-16 lg:top-4 border-2 border-white bg-red-500 w-6 h-6 flex items-center justify-center text-xs text-white rounded-full">9+</div>
        </a> --}}
        <button onclick="profile()" class="flex flex-row gap-3 items-center">
            <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="{{  asset('storage/'.auth()->user()->image) }}" class="w-10 h-10 rounded-full object-cover">
            <div class="hidden lg:flex">
                hi {{ auth()->user()->fullname }}
            </div>
        </button>
        @else
        <a href="/login" class="bg-teal-500 px-6 py-2 text-white rounded-lg hover:bg-teal-400 hover:duration-150">Login</a>
        @endif
    </div>
</nav>

@if (auth()->user())    
<div id="profileDrop" class="bg-white w-max h-max rounded-xl shadow-md fixed right-6 top-16 p-3 hidden">
    <ul class="w-56 font-medium flex flex-col gap-1">
        <li class="flex">
            <a href="/profile" class="w-full px-3 py-2 rounded-lg hover:bg-slate-200 hover:duration-150">Profile</a>
        </li>
        <li class="flex">
            <a href="/menu/company" class="w-full px-3 py-2 rounded-lg hover:bg-slate-200 hover:duration-150">Menu Company</a>
        </li>
        @if (auth()->check() && auth()->user()->isAdmin())
        <li class="flex">
            <a href="/admin/dashboard" class="w-full px-3 py-2 rounded-lg hover:bg-slate-200 hover:duration-150">Dashboard Admin</a>
        </li>
        @endif
        <li class="flex">
            <a href="/logout" class="w-full px-3 py-2 rounded-lg bg-red-500 text-white hover:bg-red-400 hover:duration-150">Logout</a>
        </li>
    </ul>
</div>
@endif