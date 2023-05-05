@if ($message = Session::get('message'))
    <div class="absolute top-2 left-1/3 z-40 w-1/3 p-3 bg-blue-500 rounded text-white text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show">
        <p>{{ $message }}</p>
    </div>
@endif