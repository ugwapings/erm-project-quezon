<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Welcome</title>
</head>
<body>
    <!-- component -->
<div class="flex h-screen w-full bg-gray-100 items-center justify-center">
    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 h-full w-1/4 hidden sm:flex p-4 shadow-xl shadow-blue-gray-900/5">
        <div class="mb-2 p-4 flex items-center">
          <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-gray-900">ERM LGU</h5>
            <img src="{{ asset('storage/images/logo.png') }}" alt="lgu logo" class="w-16 h-16 rounded-full flex-end ml-auto">
        </div>
        
        <div class="w-full pt-5 px-4 mb-8 mx-auto absolute inset-x-0 bottom-0">
          <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
              <div class="grid place-items-center mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in-icon lucide-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
              </div>
              <a href="{{ route('login') }}">Login</a>
            </div>
            
            <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
              <div class="grid place-items-center mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in-icon lucide-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
              </div>
                  <a href="{{ route('register') }}">Register</a>
            </div>
          </div>
        </div>
        <div class="flex flex-col h-full w-full justify-center items-center">
            <h1 class="font-bold text-5xl mb-6">Welcome</h1>
            <img src="{{ asset('storage/images/logo.png') }}" alt="background image" class="w-1/2 h-1/2 object-fill object-center">
        </div>
    </div>
</div>


</body>
</html>