<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <!-- comment -->
    <div class="">
        <div class="">
            <x-maps-leaflet
             :centerPoint="['lat' => -37.020100, 'long' => 144.964600]"
             :zoomLevel="7"
             :markers="[['lat' => -37.020100, 'long' => 144.964600],['lat' => -37.820100, 'long' => 144.964600] ]"></x-maps-leaflet>
        </div>
    </div>
</x-app-layout>
