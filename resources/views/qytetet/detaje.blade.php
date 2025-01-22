<x-layout headerName="Detajet">
    <div class="container mx-auto px-4 py-8 flex-grow">
        <div class="big-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Detajet e qytetarit</h1>
            <p class="text-lg"><strong>ID:</strong> {{ $qytetet->id }} </p>
            <p class="text-lg"><strong>Emri:</strong> {{ $qytetet->name }} </p>
        </div>
    </div>
</x-layout>
