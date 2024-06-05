@extends('layouts.main')

@section('container')
    <div class="flex flex-col text-xl lg:text-2xl">
        <p>Hi, Admin</p>
        <p>Welcome Back👋</p>
    </div>
    <h5 class="my-4 text-xl font-medium lg:text-2xl lg:my-8">Dashboard</h5>
    <div class="flex flex-col gap-6 pb-6 lg:flex-row">
        <a href="/admin/dashboard/user" class="bg-white w-full h-max rounded-3xl shadow-md hover:-translate-y-2 hover:duration-150 overflow-hidden">
            <div class="px-6 pt-6">
                <div class="flex flex-row justify-between ">
                    <i class="lg:text-2xl fa-solid fa-users text-xl text-sky-500"></i>
                </div>
                <div class="flex flex-col mt-8">
                    <p class="text-5xl lg:text-6xl">0</p>
                    <p class="text-slate-400 lg:text-lg">Total Users</p>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0ea5e9" fill-opacity="1" d="M0,64L60,96C120,128,240,192,360,202.7C480,213,600,171,720,165.3C840,160,960,192,1080,176C1200,160,1320,96,1380,64L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </a>
        <a href="/admin/dashboard/company" class="bg-white w-full h-max rounded-3xl shadow-md hover:-translate-y-2 hover:duration-150 overflow-hidden">
            <div class="px-6 pt-6">
                <div class="flex flex-row justify-between ">
                    <i class="lg:text-2xl fa-solid fa-building text-xl text-green-500"></i>
                </div>
                <div class="flex flex-col mt-8">
                    <p class="text-5xl lg:text-6xl">0</p>
                    <p class="text-slate-400 lg:text-lg">Total Company</p>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#22c55e" fill-opacity="1" d="M0,64L60,96C120,128,240,192,360,202.7C480,213,600,171,720,165.3C840,160,960,192,1080,176C1200,160,1320,96,1380,64L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </a>
        <a href="/admin/dashboard/request" class="bg-white w-full h-max rounded-3xl shadow-md hover:-translate-y-2 hover:duration-150 overflow-hidden">
            <div class="px-6 pt-6">
                <div class="flex flex-row justify-between ">
                    <i class="lg:text-2xl fa-solid fa-envelope text-xl text-yellow-500"></i>
                </div>
                <div class="flex flex-col mt-8">
                    <p class="text-5xl lg:text-6xl">0</p>
                    <p class="text-slate-400 lg:text-lg">Request Company</p>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eab308" fill-opacity="1" d="M0,64L60,96C120,128,240,192,360,202.7C480,213,600,171,720,165.3C840,160,960,192,1080,176C1200,160,1320,96,1380,64L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </a>
    </div>
    <div class="w-full flex flex-col gap-6 mb-6 lg:flex-row">
        <div class="bg-white w-full h-max rounded-3xl p-6 shadow-md">
            <div class="flex flex-row justify-end lg:justify-between">
                <h5 class="font-semibold text-slate-400 hidden lg:block">Announcement</h5>
                <button type="button" onclick="createPost()" class="bg-teal-500 text-white px-6 py-2 rounded-lg font-medium hover:bg-teal-400 hover:duration-150">Create a new post</button>
            </div>
            <hr class="my-3">
            <span class="text-slate-400 font-medium">Today</span>
            <div class="flex flex-col w-full">
                <div class="flex flex-row w-full mt-6">
                    <a href="" class="w-20">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsPUEdlaqIwNG_xq3PtlWjuD_kxkV7ovsmcQ&usqp=CAU" alt="" class="w-14 h-14 rounded-full">
                    </a>
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row justify-between">
                            <a href="">admin</a>
                            <button><i class="fa-solid fa-ellipsis"></i></button>
                        </div>
                        <small class="text-slate-400">12/09/2024</small>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ea illo. Sed placeat eveniet dolore?</p>
                    </div>
                </div>
                <div class="flex flex-row w-full mt-6">
                    <a href="" class="w-20">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsPUEdlaqIwNG_xq3PtlWjuD_kxkV7ovsmcQ&usqp=CAU" alt="" class="w-14 h-14 rounded-full">
                    </a>
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row justify-between">
                            <a href=""> admin</a>
                            <button><i class="fa-solid fa-ellipsis"></i></button>
                        </div>
                        <small class="text-slate-400">12/09/2024</small>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ea illo. Sed placeat eveniet dolore?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white w-full h-max rounded-3xl p-6 mb-6 shadow-md">
            <div class="flex flex-row justify-end lg:justify-between">
                <span class="text-slate-400 font-medium mb-4">Log Activitity Recent</span>
            </div>
            <hr class="my-3">   
            <div class="w-full flex flex-col gap-3 mt-6 font-medium text-slate-400 bg-slate-800 p-3 rounded-xl">
                <div class="flex flex-col">
                    <p>
                        <a href="" class="text-sky-500 hover:text-sky-400 hover:duration-150">admin</a> 
                        has approved the request of company <a href="" class="  text-sky-500 hover:text-sky-400 hover:duration-150">Pt.Dirga Wijaya</a>.
                    </p>    
                    <small class="text-slate-400">03/05/2023</small>
                </div>
                <div class="flex flex-col">
                    <p>
                        <a href="" class="text-sky-500 hover:text-sky-400 hover:duration-150">admin</a> 
                        has approved the request of company <a href="" class="  text-sky-500 hover:text-sky-400 hover:duration-150">Pt.Dirga Wijaya</a>.
                    </p>    
                    <small class="text-slate-400">03/05/2023</small>
                </div>
                <div class="flex flex-col">
                    <p>
                        <a href="" class="text-sky-500 hover:text-sky-400 hover:duration-150">admin </a> 
                        has approved the request of company <a href="" class="  text-sky-500 hover:text-sky-400 hover:duration-150">Pt.Dirga Wijaya</a>.
                    </p>    
                    <small class="text-slate-400">03/05/2023</small>
                </div>
                <div class="flex flex-col">
                    <p>
                        <a href="" class="text-sky-500 hover:text-sky-400 hover:duration-150">admin</a> 
                        has approved the request of company <a href="" class="  text-sky-500 hover:text-sky-400 hover:duration-150">Pt.Dirga Wijaya</a>.
                    </p>    
                    <small class="text-slate-400">03/05/2023</small>
                </div>
                <div class="flex flex-col">
                    <p>
                        <a href="" class="text-sky-500 hover:text-sky-400 hover:duration-150">admin</a> 
                        has approved the request of company <a href="" class="  text-sky-500 hover:text-sky-400 hover:duration-150">Pt.Dirga Wijaya</a>.
                    </p>    
                    <small class="text-slate-400">03/05/2023</small>
                </div>
            </div>
        </div>
    </div>
@endsection