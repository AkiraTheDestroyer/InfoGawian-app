@extends('layouts.user')

@section('container')
    <div class="w-full h-max bg-white flex flex-col gap-4 rounded-3xl lg:flex-row p-6">
        <div class="w-full lg:w-1/3">
            <img src="{{ asset('storage/'.$company->image) }}" alt="{{ $company->company }}">
        </div>
        <form action="/menu/company/{{ $company->id }}" method="post" enctype="multipart/form-data" class="w-full flex flex-col gap-3">
            @method('put')
            @csrf
            <div class="flex flex-col">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" placeholder="Company Name" class="w-full border rounded-lg px-3 py-1" value="{{ $company->company }}">
            </div>
            <div class="flex flex-col">
                <label for="desc">Company Description</label>
                <textarea type="text" id="desc" name="desc" placeholder="Company Description" class="w-full border rounded-lg px-3 py-1">{{ $company->desc }}</textarea>
            </div>
            <div class="flex flex-col">
                <label for="desc">Rules company</label>
                <input type="hidden" id="rules" name="rules" value="{{ old('rules') }}">
                <trix-editor input="rules">{!! $company->rules !!}</trix-editor>
            </div>
            <div class="flex flex-col">
                <label for="image">Upload Image</label>
                <input type="hidden" id="olgImage" name="oldImage" value="{{ $company->image }}">
                <input type="file" id="image" name="image" class="w-full border rounded-lg px-3 py-1">
            </div>
            <div class="flex flex-col justify-end items-end">
                <button class="bg-teal-500 w-max h-max rounded-lg text-white font-medium px-6 py-2 hover:bg-teal-400 hover:duration-150">Edit</button>
            </div>
        </form>
    </div>
@endsection