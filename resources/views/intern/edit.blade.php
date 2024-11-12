@extends('layouts.layout')

@section('content')
    <div class="w-full h-96 bg-auto bg-no-repeat bg-center" style="background-image: url('{{ asset('images/green1.jpeg') }}');">
    </div>

    <div class="flex justify-center mt-4">
        <div class="text-center p-8 bg-neutral-200 shadow-lg rounded-lg w-4/5 max-w-lg">
            <h1 class="text-4xl font-bold text-green-800 mb-4">Edit Intern</h1>
            <form action="{{ route('intern.update', $intern->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block text-lg font-bold text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ $intern->name }}" class="w-full p-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label for="course" class="block text-lg font-bold text-gray-700">Course</label>
                    <input type="text" name="course" id="course" value="{{ $intern->course }}" class="w-full p-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label for="institution" class="block text-lg font-bold text-gray-700">Institution</label>
                    <input type="text" name="institution" id="institution" value="{{ $intern->institution }}" class="w-full p-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label for="career_path" class="block text-lg font-bold text-gray-700">Career Path</label>
                    <input type="text" name="career_path" id="career_path" value="{{ $intern->career_path }}" class="w-full p-2 border rounded" required>
                </div>
                <button type="submit" class="bg-green-800 text-white py-2 px-6 rounded hover:bg-green-600">Update</button>
            </form>
        </div>
    </div>
@endsection
