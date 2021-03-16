
@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white rounded-lg p-6">
            
            <form action="{{route('register')}}" method="POST">
                @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name"
                 class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror"  value="{{old('name')}}">

                 @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Your email"
                 class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror" value="{{old('email')}}">

                 @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Username"
                 class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror" value="{{old('username')}}">

                 @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password"
                 class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror" value="">

                 @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                 @enderror
            </div>

            <div class="mb-4">
                <label for="repetpassword" class="sr-only">Repete Password</label>
                <input type="password" name="password_conirmation" id="password_conirmation" placeholder="Repet Password"
                 class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror" value="">
            </div>

            <button type="submit" 
            class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"> Register</button>

            </form>

        </div>

    </div>
    
@endsection

