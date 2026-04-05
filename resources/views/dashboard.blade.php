<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard
            </h2>

            <a href="/seats" class="text-blue-500 hover:underline">
                Lihat Kursi
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- CARD -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- GRID KURSI -->
                <div class="seat-container">
                    @forelse($seats as $id => $seat)
                        <div class="seat {{ $seat['status'] }}">
                            {{ $id }}
                        </div>
                    @empty
                <p class="text-gray-500">Belum ada data kursi</p>
                    @endforelse
                </div>

            </div>

        </div>
    </div>
</x-app-layout>