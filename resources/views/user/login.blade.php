@extends('app')

@section('content')
    <div class="flex justify-center bg-white">
        <div class="border-2 border-gray-300  md:w-1/3 bg-gray-100 rounded-lg m-2 p-2 text-center">
            <form class="m-2 p-2 text-center" action="/login" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                    <input name="email" type="email" id="email" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email@company.com" required>
                </div> 
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input name="password" type="password" id="password" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••" required>
                </div>
                @error('error')
                    <p class="text-red-500 text-xs mb-4">
                        {{$message}}
                    </p>
                @enderror 
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign in</button>
            </form>
            <a class="mb-2 text-xs text-blue-700 hover:text-blue-500" href="/register">Still have no account? Click to register!</a>
        </div>
    </div>
@endsection