<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Test</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex item-center">
            <li><a href="#" class="p-3"> HOME</a></li>
        
            <li><a href="#" class="p-3" > Blog</a></li>
        
            <li><a href="#" class="p-3"> Documentation</a></li>
        </ul>
    
        <ul class="flex item-center">
            

            @auth
            <li><a href="#" class="p-3"> Aacs</a></li>    
            
            <li>
                <form action=" {{route('logout')}}" method="POST" class="in-line p-3">
                    @csrf
                    <button type="submit">Logout</button> 
                </form>             
            </li>
                
           @endauth

           @guest
            <li><a href="{{route('login')}}" class="p-3"> Login</a></li>        
            <li><a href="{{route('register')}}" class="p-3"> Register</a></li>                
            @endguest
            
    
        </ul>
    
    
    </nav>
    @yield('content')
</body>

</html>