@extends('layouts.user')

@section('container')
<h5 class="text-slate-500 font-bold lg:text-lg">Worker</h5>
<div class="w-full flex flex-col gap-3 lg:flex-row">
    <div class="w-full flex flex-col">
        <div class="mt-4 bg-white w-full h-max rounded-3xl shadow-md flex flex-row overflow-hidden">
            <div class="bg-teal-500 w-4"></div>
            <div class="w-full flex flex-col gap-3 p-6">
                <form action="" class="flex flex-row">
                    <input type="text" class="bg-white border rounded-l-lg w-full px-3 py-2 outline-teal-500" placeholder="Fullname" id="workers" name="workers">
                    <button class="bg-teal-500 px-3 py-2 rounded-r-lg text-white font-medium hover:bg-teal-400 hover:duration-150"><i class="fa fa-solid fa-search"></i></button>
                </form>
                @foreach ($workers as $worker)                    
                <a href="/worker/{{ $worker->id }}" class="w-full flex flex-row gap-3 hover:-translate-x-2 hover:duration-150">
                    <div class="w-28 lg:w-max">
                        <img src="{{ asset('storage/'.$worker->image) }}" alt="{{ $worker->username }}" class="w-10 h-10 lg:w-20 lg:h-20 rounded-full">
                    </div>
                    <div class="flex flex-col text-sm lg:text-base">
                        <p class="font-medium">{{ $worker->fullname }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-4 bg-white w-1/3 h-max rounded-3xl shadow-md flex flex-col overflow-hidden">
        <div class="w-full flex justify-center p-6" style="background-image: url('https://e0.pxfuel.com/wallpapers/491/601/desktop-wallpaper-ultra-original-and-background-it-ultra.jpg');">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsPUEdlaqIwNG_xq3PtlWjuD_kxkV7ovsmcQ&usqp=CAU" alt="" class="w-32 h-32 rounded-full border-4">
        </div>
        <div class="bg-teal-500 w-full h-4 rounded-b-3xl"></div>
        <ul class="w-full flex flex-col justify-start p-6 text-lg font-medium">
            <li class="text-xs lg:text-sm font-light text-slate-500">Registered at 09/09/2023</li>
            <li class="lg:text-lg">Erlang Andriyanputra</li>
            <li class="lg:text-lg">08xxxxxxx</li>
            <li class="lg:text-lg">****@gmail.com</li>
            <li>
                <p class="text-sm lg:text-base text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odit, magni similique, obcaecati ipsa quibusdam excepturi ab amet dolores aliquam maxime repellendus, inventore delectus illum. Perspiciatis sit ex aliquam nihil.</p>
            </li>
        </ul>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14b8a6" fill-opacity="1" d="M0,32L48,42.7C96,53,192,75,288,74.7C384,75,480,53,576,74.7C672,96,768,160,864,176C960,192,1056,160,1152,149.3C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
</div>

@endsection