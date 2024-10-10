<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue leading-tight">
            {{ __('Laboratorium SI') }}
        </h2>
    </x-slot>

    <!-- Container Box for Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- First Box -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Welcome</h3>
                    <p class="text-gray-700">
                        {{ __("You're logged in!") }}
                    </p>
                </div>
            </div>

            <!-- Additional Box for more content -->
            <div class="bg-white mt-8 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Another Section</h3>
                    <p class="text-gray-700">
                        This is another content box. You can add more details or functionality here.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
