@extends('layouts.layout')

@section('content')
    <div class="w-full h-96 bg-auto bg-no-repeat bg-center" style="background-image: url('{{ asset('images/green1.jpeg') }}');">
    </div>

    <div class="flex justify-center mt-4">
        <div class="text-center p-8 bg-neutral-200 shadow-lg rounded-lg w-4/5 max-w-lg">
            <h1 class="text-4xl font-bold text-green-800 mb-4">Hello Intern</h1>
            <blockquote class="text-lg text-gray-700 mb-6">
                Welcome to your new journey! Start exploring data and building projects.
            </blockquote>
            <a href="#" class="bg-green-800 text-white py-2 px-6 rounded hover:bg-green-600">
                Get Started
            </a>
        </div>
    </div>
@endsection
