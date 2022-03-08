<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col items-center min-h-screen pt-6 sm:pt-0">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
