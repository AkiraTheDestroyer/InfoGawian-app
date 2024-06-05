@extends('layouts.user')

@section('container')
    <div class="text-slate-500 text-lg lg:text-xl font-medium">Menu Company</div>
    <div class="bg-white w-full h-max rounded-3xl my-6 flex flex-col overflow-hidden">
        <svg class="lg:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,85.3C384,64,480,96,576,138.7C672,181,768,235,864,229.3C960,224,1056,160,1152,133.3C1248,107,1344,117,1392,122.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        @if($company)
            @if($company->status == 'active')
                <div class="px-6 w-full lg:flex lg:gap-3 lg:py-3 lg:items-center">
                    <div class="w-1/3">
                        <img src="{{ asset('storage/'.$company->image) }}" alt="{{ $company->company }}" class="object-cover">
                    </div>
                    <div class="w-full">
                        <h5 class="text-teal-500 text-lg font-medium">{{ $company->company }}</h5>
                        <p>{{ $company->desc }}</p>
                        <p class="mt-4">{!! $company->rules !!}</p>
                        <div class="flex justify-end gap-3">
                            <a href="/menu/company/{{ $company->id }}/edit" class="px-3 py-2 bg-teal-500 rounded-lg text-white hover:bg-teal-400 hover:duration-150 mt-6 lg:px-6">Edit</a>
                            <a href="/postJob/create" class="px-3 py-2 bg-teal-500 rounded-lg text-white hover:bg-teal-400 hover:duration-150 mt-6 lg:px-6">Create a Vacancy</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="p-6">
                    <div class="bg-sky-100 p-6 rounded-lg">
                        <p>You have successfully applied for company creation and just have to wait for confirmation from the admin</p>
                    </div>
                </div>
            @endif  
        @else
        <div class="px-6 py-3">
            <p>you don't have any company? <button type="button" onclick="createCompany()" class="text-sky-500 hover:text-sky-400 hover:duration-150">create a company</button></p>
        </div>
        @endif
        <svg class="lg:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,85.3C384,64,480,96,576,138.7C672,181,768,235,864,229.3C960,224,1056,160,1152,133.3C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    @if($company)
    <div class="bg-white w-full h-max rounded-3xl shadow-md p-6">
        <h5>Posts by {{ $company->company }}</h5>
        <table class="w-full text-center text-sm mt-4 lg:text-base ">
            <thead class="border-b">
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </thead>
            <tbody class="">
                @foreach ($posts as $post)                                
                <tr>
                    <td class="mt-3">{{ $post->id }}</td>
                    <td class="mt-3">{{ $post->title }}</td>
                    <td class="flex flex-row justify-center gap-2 mt-3">
                        <a href="/jobs/{{ $post->id }}"
                            class="border border-teal-500 rounded-lg p-2 text-teal-500 hover:bg-teal-500 hover:text-white hover:duration-150">
                            <i class="fa-solid fa-eye"></i>
                            <span class="hidden lg:inline">Show</span>
                        </a>
                        <a href="/postJob/{{ $post->id }}/edit"
                            class="border border-yellow-500 rounded-lg p-2 text-yellow-500 hover:bg-yellow-500 hover:text-white hover:duration-150">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span class="hidden lg:inline">Edit</span>
                        </a>
                        <form action="/postJob/{{ $post->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button
                                class="border border-red-500 rounded-lg p-2 text-red-500 hover:bg-red-500 hover:text-white hover:duration-150" data-confirm-delete="true">
                                <i class="fa-solid fa-trash"></i>
                                <span class="hidden lg:inline">Delete</span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
@endsection