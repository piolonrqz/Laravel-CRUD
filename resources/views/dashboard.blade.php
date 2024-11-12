@extends('layouts.layout')

@section('content')
    @include('layouts.navigation')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
                    <p class="mb-4">Welcome to your dashboard!</p>
                    <a href="{{ route('intern.index') }}" 
                       class="bg-green-800 text-white py-2 px-4 rounded hover:bg-green-600">
                        Go to Intern Management
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection