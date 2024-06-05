@extends('layouts.user')

@section('container')
    <h5 class="font-medium text-lg lg:text-xl text-slate-500">Message</h5>
    <div class="bg-white w-full h-max p-6 my-6 rounded-3xl flex flex-col lg:flex-row lg:gap-4 lg:justify-center lg:items-center">
        <span class="lg:hidden">From</span>
        <ul class="flex flex-row gap-4 mt-3 lg:flex-col">
            <li>
                <a href="/message" class="{{ $tabActive == 'admin' ? 'bg-teal-400 px-3 py-2 text-white rounded-lg hover:text-white' : '' }} text-sky-500 hover:text-sky-400 hover:duration-150">Admin</a>
            </li>
            <li>
                <a href="/message/company" class="{{ $tabActive == 'company' ? 'bg-teal-400 px-3 py-2 text-white rounded-lg hover:text-white' : '' }} text-sky-500 hover:text-sky-400 hover:duration-150">Company</a>
            </li>
        </ul>
        <div class="bg-slate-100 mt-6 w-full h-max rounded-lg p-2">
            <div class="w-full flex flex-row">
                <div class="flex flex-col w-full lg:w-20">
                    <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsPUEdlaqIwNG_xq3PtlWjuD_kxkV7ovsmcQ&usqp=CAU') }}" alt="" class="w-8 h-8 rounded-full">
                </div>
                <div class="flex flex-col">
                    <span>Erlang Andriyanputra</span>
                    <small class="text-xs">09/09/2023</small>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum dolorum, veritatis iure autem fuga modi explicabo laboriosam, neque quibusdam deserunt error deleniti! Architecto consectetur voluptatum suscipit labore nihil ipsum nam!</p>
                </div>
            </div>
        </div>
    </div>
@endsection