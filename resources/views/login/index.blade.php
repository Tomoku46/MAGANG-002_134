<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PBPD</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    <link href='img/pln.jpg' rel='shortcut icon'>
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <img src="{{ asset('img/pln.jpg') }}" alt="Logo" class="h-16"> 
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">SMART PBPD</p>

                {{-- Menampilkan pesan error jika login gagal --}}
                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                <form class="flex flex-col pt-3 md:pt-8" action="{{ route('pengguna.post') }}" method="POST">
                    @csrf {{-- Token keamanan Laravel --}}
                    <div class="flex flex-col pt-4">
                        <label for="username" class="text-lg">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" value="{{ old('username') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('username') border-red-500 @enderror">
                        @error('username')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror">
                        @error('password')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
    
                   <button 
                        type="submit" class="mt-6 w-full text-white py-3 rounded-lg font-semibold text-base transition"
                        style="background-color: #14A2BA;"
                        onmouseover="this.style.backgroundColor='#117e91'" onmouseout="this.style.backgroundColor='#14A2BA'">
                        Login
                    </button>
                </form>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="img/plnlogin.png">
        </div>
    </div>

</body>
</html>