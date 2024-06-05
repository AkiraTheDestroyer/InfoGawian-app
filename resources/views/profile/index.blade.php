@extends('layouts.user')

@section('container')
<h5 class="text-slate-500 font-bold lg:text-lg">Profile</h5>
<div class="w-full flex flex-col gap-3 lg:flex-row">
    <div class="w-full flex flex-col">
        <div class="mt-4 bg-white w-full h-max rounded-3xl shadow-md flex flex-col lg:items-center overflow-hidden lg:flex-row">
            <svg class="lg:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,85.3C384,64,480,96,576,138.7C672,181,768,235,864,229.3C960,224,1056,160,1152,133.3C1248,107,1344,117,1392,122.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div class="w-full flex justify-center lg:w-1/4">
                <img src="{{ asset('storage/'.$user->image) }}" alt="{{ $user->username }}" class="w-32 h-32 rounded-full object-cover">
            </div>
            <hr class="lg:hidden mt-6">
            <form action="/profile/{{ auth()->user()->id }}" method="post" enctype="multipart/form-data" class="py-6 flex flex-col gap-3 w-full">
                @method('put')
                @csrf
                <div class="flex flex-col px-6">
                    <label for="fullname" class="text-slate-500">Fullname</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Fullname" class="w-full border px-3 py-2 rounded-lg" value="{{ $user->fullname }}">
                </div>
                <div class="flex flex-col px-6">
                    <label for="username" class="text-slate-500">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" class="w-full border px-3 py-2 rounded-lg" value="{{ $user->username }}">
                </div>
                <div class="flex flex-col px-6">
                    <label for="whatsapp" class="text-slate-500">WhatsApp</label>
                    <input type="number" id="whatsapp" name="whatsapp" placeholder="WhatsApp" class="w-full border px-3 py-2 rounded-lg" value="{{ $user->whatsapp }}">
                    @if($user->whatsapp == null)
                    <small>
                        you not yet add whatsapp! 
                        <button type="button" onclick="addWhatsapp()" class="text-sky-500 hover:text-sky-400 hover:duration-150">add</button>
                    </small>
                    @endif
                </div>
                <div class="flex flex-col px-6">
                    <label for="email" class="text-slate-500">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="w-full border px-3 py-2 rounded-lg" value="{{ $user->email }}">
                    @if($user->email == null)
                    <small>
                        you not yet add email! 
                        <button type="button" onclick="addEmail()" class="text-sky-500 hover:text-sky-400 hover:duration-150">add</button>
                    </small>
                    @endif
                </div>
                <div class="flex flex-col px-6">
                    <label for="image" class="text-slate-500">Upload Image</label>
                    <input type="hidden" name="oldImage" id="oldImage" value="{{ $user->image }}">
                    <input type="file" id="image" name="image" class="w-full border px-3 py-2 rounded-lg">
                </div>
                <div class="flex flex-col justify-end items-end px-6">
                    <button type="submit" class="w-max bg-teal-500 px-4 py-2 rounded-lg text-white hover:bg-teal-400 hover:duration-150">Change</button>
                </div>
            </form>
            <svg class="lg:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,85.3C384,64,480,96,576,138.7C672,181,768,235,864,229.3C960,224,1056,160,1152,133.3C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </div>
</div>



@endsection