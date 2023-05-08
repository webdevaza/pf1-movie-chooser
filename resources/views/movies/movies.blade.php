@extends('app')

@section('content')
    <section class="bg-white py-8">
        {{-- Random movie button --}}
        <div class="text-center">
            <a href="/random" class="inline-flex justify-center items-center py-3 px-5 text-base text-center text-white rounded-lg bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:ring-[#24292F]/50 dark:focus:ring-gray-500">
                <p class="font-medium mr-3">CHOOSE A RANDOM MOVIE</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3h5v5M4 20L20.2 3.8M21 16v5h-5M15 15l5.1 5.1M4 4l5 5"/></svg>
            </a>
        </div>
        {{-- Movies part --}}
        <div>
            {{-- Search bar --}}
            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                     <form class="w-full">   
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Movies" required>
                            <button type="submit" class="text-white absolute right-4 bottom-4 bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#747070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 3H6a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h4M16 17l5-5-5-5M19.8 12H9"/></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </nav>
            {{-- Movie tags and add button --}}
            @auth
            <div class="flex flex-wrap w-full justify-center text-center text-xs" title="Authorized users only">
                <a class="w-20 mt-2 p-1 mx-2 bg-blue-600 border-2 border-blue-600 rounded-md text-white" href="/">ALL</a>
                <a class="w-20 mt-2 p-1 mx-2 bg-green-600 border-2 border-green-600 rounded-md text-white" href="/mymovies">MINE</a>
                <a class="w-20 mt-2 p-1 mx-2 text-blue-700 border-2 border-blue-500 rounded-md" href="/add"> + ADD</a>
            </div>
            @endauth

            {{-- Movies list --}}
            <div class="container mx-auto flex items-center flex-wrap pt-2 pb-12">
                @foreach ($movies as $movie)
                    <div class="xs:w-1/2 sm:w-1/4 md:w-1/6 lg:w-1/7 xl:w-1/8 p-6 flex flex-col">
                        <a href="/movies/{{$movie->id}}">
                            <img class="hover:grow hover:shadow-lg aspect-[3/4]" src="{{$movie->moviePosterExt}}">
                            <div class="pt-3 flex flex-wrap items-center justify-between">
                                <p class="text-blue-500 h-6 text-sm truncate ..." title="{{$movie->movieTitle}} ({{$movie->year}})">{{$movie->movieTitle}} ({{$movie->year}})</p>
                            </div>
                            <hr>
                            <div class=" flex items-center justify-between">
                                <p class="pt-1 text-gray-700 text-xs truncate ...">History</p>
                                <p class=" text-green-700">5.0</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div> 
            <div class="mx-10">
                <p>{{$movies->links()}}</p>
            </div>   
        </div>

    </section>
@endsection

