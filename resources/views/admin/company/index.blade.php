@extends('layouts.main')

@section('container')
    <h5 class="text-slate-500 font-medium text-xl">Company</h5>
    <div class="mt-6 bg-white w-full h-max rounded-3xl overflow-hidden shadow-md hover:-translate-y-2 hover:duration-150 lg:w-1/3">
        <div class="p-6 flex flex-col">
            <h6 class="text-slate-500 text-4xl font-medium">2456</h6>
            <div class="ml-6 text-slate-500">Company</div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,128L20,144C40,160,80,192,120,218.7C160,245,200,267,240,266.7C280,267,320,245,360,213.3C400,181,440,139,480,149.3C520,160,560,224,600,240C640,256,680,224,720,213.3C760,203,800,213,840,197.3C880,181,920,139,960,133.3C1000,128,1040,160,1080,165.3C1120,171,1160,149,1200,138.7C1240,128,1280,128,1320,138.7C1360,149,1400,171,1420,181.3L1440,192L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    </div>
    <a href="/admin/dashboard" class="mt-6 border border-yellow-500 w-max h-max px-6 py-2 font-medium text-yellow-500 rounded-xl hover:bg-yellow-500 hover:text-white hover:duration-150">&laquo; Back Dashboard</a>
    <div class="flex flex-col lg:flex-row gap-6 mt-6">
        <div class="bg-white w-full h-max rounded-3xl shadow-md overflow-hidden p-6">
            <h5 class="text-lg text-teal-500 font-medium">Active Company</h5>
            <div class="flex flex-col">
                <form action="" class="my-3">
                    <div class="flex flex-row">
                        <input type="text" name="active" id="active"
                            class="border w-full rounded-l-lg shadow-md px-3 py-2 outline-teal-500" placeholder="Keywords">
                        <button
                            class="bg-teal-500 px-3 py-2 text-white rounded-r-lg hover:bg-teal-400 hover:duration-150"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <div>
                    <table class="w-full text-center text-sm mt-4 lg:text-base ">
                        <thead class="border-b">
                            <th>ID</th>
                            <th>Company</th>
                            <th>Action</th>
                        </thead>
                        <tbody class="">
                            @foreach ($activeCompany as $company)                                
                            <tr>
                                <td class="mt-3">{{ $company->id }}</td>
                                <td class="mt-3">{{ $company->company }}</td>
                                <td class="flex flex-row justify-center gap-2 mt-3">
                                    <a href="/admin/dashboard/company/{{ $company->id }}"
                                        class="border border-teal-500 rounded-lg p-2 text-teal-500 hover:bg-teal-500 hover:text-white hover:duration-150">
                                        <i class="fa-solid fa-eye"></i>
                                        <span class="hidden lg:inline">Show</span>
                                    </a>
                                    <a href="/admin/dashboard/company/{{ $company->id }}/edit"
                                        class="border border-yellow-500 rounded-lg p-2 text-yellow-500 hover:bg-yellow-500 hover:text-white hover:duration-150">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <span class="hidden lg:inline">Edit</span>
                                    </a>
                                    <form action="/admin/dashboard/company/{{ $company->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button
                                            data-confirm-delete="true"
                                            class="border border-red-500 rounded-lg p-2 text-red-500 hover:bg-red-500 hover:text-white hover:duration-150">
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
            </div>
        </div>
        <div class="bg-white w-full h-max rounded-3xl shadow-md overflow-hidden p-6">
            <h5 class="text-lg text-red-500 font-medium">Unactive Company</h5>
            <div class="flex flex-col">
                <form action="" class="my-3">
                    <div class="flex flex-row">
                        <input type="text" name="inactive" id="inactive"
                            class="border w-full rounded-l-lg shadow-md px-3 py-2 outline-red-500" placeholder="Keywords">
                        <button
                            class="bg-red-500 px-3 py-2 text-white rounded-r-lg hover:bg-red-400 hover:duration-150"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <div>
                    <table class="w-full text-center text-sm mt-4 lg:text-base ">
                        <thead class="border-b">
                            <th>ID</th>
                            <th>Company</th>
                            <th>Action</th>
                        </thead>
                        <tbody class="">
                            @foreach ($inactiveCompany as $company)                                
                            <tr>
                                <td class="mt-3">{{ $company->id }}</td>
                                <td class="mt-3">{{ $company->company }}</td>
                                <td class="flex flex-row justify-center gap-2 mt-3">
                                    <a href="/admin/dashboard/company/{{ $company->id }}"
                                        class="border border-teal-500 rounded-lg p-2 text-teal-500 hover:bg-teal-500 hover:text-white hover:duration-150">
                                        <i class="fa-solid fa-eye"></i>
                                        <span class="hidden lg:inline">Show</span>
                                    </a>
                                    <a href="/admin/dashboard/company/{{ $company->id }}/edit"
                                        class="border border-yellow-500 rounded-lg p-2 text-yellow-500 hover:bg-yellow-500 hover:text-white hover:duration-150">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <span class="hidden lg:inline">Edit</span>
                                    </a>
                                    <form action="/admin/dashboard/company/{{ $company->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button
                                            data-confirm-delete="true"
                                            class="border border-red-500 rounded-lg p-2 text-red-500 hover:bg-red-500 hover:text-white hover:duration-150">
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
            </div>
        </div>
    </div>
@endsection
