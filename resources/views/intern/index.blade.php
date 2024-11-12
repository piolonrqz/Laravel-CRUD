@extends('layouts.layout')

@section('content')
        <header class="bg-green-800 text-white py-4">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-bold">Intern Records Management</h1>
                <nav>
            
                </nav>
            </div>
        </header>

    <div class="w-full h-96 bg-auto bg-no-repeat bg-center" style="background-image: url('{{ asset('images/green1.jpeg') }}');">
    </div>

    <div class="flex justify-center mt-4">
        <div class="text-center p-8 bg-neutral-200 shadow-lg rounded-lg w-11/12 max-w-7xl">  <!-- Changed from w-4/5 max-w-lg to w-11/12 max-w-7xl -->
            <h1 class="text-4xl font-bold text-green-800 mb-4">Intern Records</h1>
            <a href="{{ route('intern.create') }}" class="inline-block bg-green-800 text-white py-2 px-6 rounded hover:bg-green-600 mb-6">
                Add New Intern
            </a>
            <div class="overflow-x-auto">  <!-- Added overflow handling -->
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2 bg-green-700 text-white">Name</th>
                            <th class="border px-4 py-2 bg-green-700 text-white">Course</th>
                            <th class="border px-4 py-2 bg-green-700 text-white">Institution</th>
                            <th class="border px-4 py-2 bg-green-700 text-white">Career Path</th>
                            <th class="border px-4 py-2 bg-green-700 text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($interns as $intern)
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">{{ $intern->name }}</td>
                                <td class="border px-4 py-2">{{ $intern->course }}</td>
                                <td class="border px-4 py-2">{{ $intern->institution }}</td>
                                <td class="border px-4 py-2">{{ $intern->career_path }}</td>
                                <td class="border px-4 py-2">
                                    <div class="flex justify-center gap-2">  <!-- Added flex container for buttons -->
                                        <a href="{{ route('intern.edit', $intern->id) }}" 
                                           class="bg-yellow-400 text-white py-2 px-4 rounded hover:bg-yellow-500 transition-colors">
                                            Edit
                                        </a>
                                        <form action="{{ route('intern.destroy', $intern->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition-colors">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection