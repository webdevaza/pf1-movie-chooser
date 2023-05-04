@extends('app')

@section('content')

    
    <div class="flex bg-white py-3 justify-center">
        <div class="p-4 md:w-[70%] border-2 border-gray-300 rounded-lg justify-center bg-gray-100">
            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Movie title</label>
                        <input type="text" id="first_name" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Movie title" required autocomplete="off">
                    </div>
                    <div>
                        <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                        <select id="years" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Year</option>
                            @for ($i = 2023; $i >= 1980; $i--)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div>
                        <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Movie source</label>
                        <input type="url" id="website" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="website url" required>
                    </div>
                </div>
                <div class="grid mb-6 md:grid-cols-1">
                    <label for="description" class="block text-sm font-medium text-gray-900 dark:text-white">Movie description</label>
                    <textarea id="description" rows="4" class="block mt-2 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-400 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe the movie"></textarea>
                </div>    
                <div class="grid gap-6 mb-6 md:grid-cols-2">    
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Movie poster</label>
                        <input type="file" id="poster" class="bg-white h-11 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Or poster url</label>
                        <input type="url" id="website" class="bg-white h-11 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="poster url" required>
                    </div>
                </div>
                
                <div class="w-full text-center">
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                </div>
            </form>
        </div>
    </div>


@endsection