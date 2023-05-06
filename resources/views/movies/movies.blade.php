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
            {{-- Add new movie button --}}
            <div class="w-full text-center text-xs text-blue-700" title="Authorized users only">
                <a href="/add">ADD NEW MOVIE</a>
            </div>
            {{-- Movies list --}}
            <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
                <div class="xs:w-1/2 sm:w-1/4 md:w-1/6 lg:w-1/7 xl:w-1/8 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://www.joblo.com/wp-content/uploads/2023/04/the-mother-poster.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="text-blue-500">MovieName</p>
                        </div>
                        <hr>
                        <div class=" flex items-center justify-between">
                            <p class="pt-1 text-gray-700 text-xs">Thriller</p>
                            <p class=" text-green-700">5.0</p>
                        </div>
                    </a>
                </div>

                <div class="xs:w-1/2 sm:w-1/4 md:w-1/6 lg:w-1/7 xl:w-1/8 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://www.joblo.com/wp-content/uploads/2004/05/2004-troy-4-1.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="text-blue-500">MovieName</p>
                        </div>
                        <hr>
                        <div class=" flex items-center justify-between">
                            <p class="pt-1 text-gray-700 text-xs">History</p>
                            <p class=" text-green-700">5.0</p>
                        </div>
                    </a>
                </div>

                <div class="xs:w-1/2 sm:w-1/4 md:w-1/6 lg:w-1/7 xl:w-1/8 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://www.joblo.com/wp-content/uploads/2000/05/2000-poster-gladiator-1-1.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="text-blue-500">MovieName</p>
                        </div>
                        <hr>
                        <div class=" flex items-center justify-between">
                            <p class="pt-1 text-gray-700 text-xs">History</p>
                            <p class=" text-green-700">5.0</p>
                        </div>
                    </a>
                </div>

                <div class="xs:w-1/2 sm:w-1/4 md:w-1/6 lg:w-1/7 xl:w-1/8 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://oc.kg/media/images/9/e/9e56671d7cec5195999b7b2b6d6d8997/image.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="text-blue-500">MovieName</p>
                        </div>
                        <hr>
                        <div class=" flex items-center justify-between">
                            <p class="pt-1 text-gray-700 text-xs">Action</p>
                            <p class=" text-green-700">5.0</p>
                        </div>
                    </a>
                </div>

                <div class="xs:w-1/2 sm:w-1/4 md:w-1/6 lg:w-1/7 xl:w-1/8 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1467949576168-6ce8e2df4e13?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="text-blue-500">MovieName</p>
                        </div>
                        <hr>
                        <div class=" flex items-center justify-between">
                            <p class="pt-1 text-gray-700 text-xs">History</p>
                            <p class=" text-green-700">5.0</p>
                        </div>
                    </a>
                </div>

                <div class="xs:w-1/2 sm:w-1/4 md:w-1/6 lg:w-1/7 xl:w-1/8 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="text-blue-500">MovieName</p>
                        </div>
                        <hr>
                        <div class=" flex items-center justify-between">
                            <p class="pt-1 text-gray-700 text-xs">History</p>
                            <p class=" text-green-700">5.0</p>
                        </div>
                    </a>
                </div>

                <div class="xs:w-1/2 sm:w-1/4 md:w-1/6 lg:w-1/7 xl:w-1/8 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1550837368-6594235de85c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="text-blue-500">MovieName</p>
                        </div>
                        <hr>
                        <div class=" flex items-center justify-between">
                            <p class="pt-1 text-gray-700 text-xs">History</p>
                            <p class=" text-green-700">5.0</p>
                        </div>
                    </a>
                </div>

                <div class="xs:w-1/2 sm:w-1/4 md:w-1/6 lg:w-1/7 xl:w-1/8 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1551431009-a802eeec77b1?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="text-blue-500">MovieName</p>
                        </div>
                        <hr>
                        <div class=" flex items-center justify-between">
                            <p class="pt-1 text-gray-700 text-xs">History</p>
                            <p class=" text-green-700">5.0</p>
                        </div>
                    </a>
                </div>
            </div>    
        </div>

    </section>
@endsection

