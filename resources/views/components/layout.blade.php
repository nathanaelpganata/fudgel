<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
    <title>Fudgel</title>
</head>
<body>
    <div class="bg-liteBlack min-h-screen">
        <nav class="flex h-14 w-full bg-black text-white font-poppins items-center px-3 md:px-10 fixed">
            <div class="mr-auto">
                <a href="/" class="md:text-3xl text-xl">Fudgel</a>
            </div>
            <div class="mx-auto">
                <a href="/" class="md:text-xl text-lg hover:text-slate-300 ">Home</a>
            </div>
            @auth
            <a href="/notes/create" class="md:text-lg mr-4 hover:text-slate-300 flex flex-row items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-0.5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
              </svg>
              Create Notes
            </a>
            <a href="/notes/manage" class="md:text-lg mr-4 hover:text-slate-300 flex flex-row items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
              Manage Notes
            </a>
            <span class="mr-3 bg-grey px-4 py-1 rounded-lg">Welcome, {{auth()->user()->name}}</span>
                <form action="/users/logout" method="POST" class="text-right bg-pink-600 px-4 py-1 rounded-lg ">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            @else
                <div class="ml-auto">
                    <a href="/users/login" class="md:text-lg md:mr-4 mr-2 hover:text-slate-300">Log In</a>
                    <a href="/users/register" class="md:text-lg hover:text-slate-300">Sign Up</a>
                </div>
            @endauth
        </nav>
    
    <div class="md:mx-52 mx-4">
    {{$slot}}
    </div>

    </div>
</body>
</html>