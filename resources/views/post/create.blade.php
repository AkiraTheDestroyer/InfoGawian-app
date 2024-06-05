@extends('layouts.user')

@section('container')
    <div class="w-full h-max bg-white flex flex-col gap-4 rounded-3xl lg:flex-row p-6">
        <form action="/postJob" method="post" class="w-full flex flex-col gap-3">
            @method('post')
            @csrf
            <div class="flex flex-col">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title" class="w-full border rounded-lg px-3 py-1">
            </div>
            <div class="flex flex-col">
                <label for="salary">Salary</label>
                <input type="number" id="salary" name="salary" placeholder="Salary" class="w-full border rounded-lg px-3 py-1">
            </div>
            <div class="flex flex-col">
                <label for="salary_type">Salary Type</label>
                <select type="number" id="salary_type" name="salary_type" placeholder="Salary Type" class="w-full border rounded-lg px-3 py-1">
                    <option value="month">Month</option>
                    <option value="year">Year</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="status">Status</label>
                <select type="text" id="status" name="status" placeholder="Title" class="w-full border rounded-lg px-3 py-1">
                    <option value="open">Open</option>
                    <option value="close">Close</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="body">Text</label>
                <input type="hidden" id="x" name="body">
                <trix-editor input="x"></trix-editor>
            </div>
            <div class="flex flex-col justify-end items-end">
                <button class="bg-teal-500 w-max h-max rounded-lg text-white font-medium px-6 py-2 hover:bg-teal-400 hover:duration-150">Submit</button>
            </div>
        </form>
    </div>
@endsection