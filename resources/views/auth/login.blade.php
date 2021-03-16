
@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white rounded-lg p-6">

            @if(session('status'))
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                {{session('status')}}
            </div>
           
            @endif

            <form action="{{route('login')}}" method="POST">
                @csrf          

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
           
            <button type="submit" 
            class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"> Login</button>

            </form>

        </div>

    </div>
    
@endsection

