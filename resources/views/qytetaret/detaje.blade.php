<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script>
     <title>Citizen Details</title>
</head>
  <body class="bg-gray-100 min-h-screen flex flex-col">
      <header class="bg-green-600 text-white">
            <div class="container mx-auto px-4 py-4  flex items-center justify-between">
                <div class="flex items-center">
                    <span class="text-2xl font-semibold">Laravel Project</span>
          </div>

          <nav>
            <ul class="flex space-x-6 text-lg">
                <li>
                    <a href="/qytetet/qytetet" class="hover:underline">Qytetet</a>
                </li>
                <li>
                    <a href="/" class="hover:underline">Qytetaret</a>
                </li>
            <ul>
           
          </nav>
        </div>
      </header>
    
     <main class="container mx-auto px-4 py-8 flex-grow">
        <div class="mb-4 flex items-strech justify-between">
            <a href="{{ url('/') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus-ring focus:ring-green-500">&larr; Kthehu tek tabela</a>
            <a href="{{ url('/qytetaret/' . $qytetar->id . '/edit')}}"
            class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
        </div>

    <div class="big-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Detajet e qytetarit</h1>
    <p class="text-lg"><strong>ID:</strong> {{ $qytetar->id }} </p>
    <p class="text-lg"><strong>Emri:</strong> {{ $qytetar->emri }} </p>
    <p class="text-lg"><strong>Mbiemri:</strong> {{ $qytetar->mbiemri }} </p>
    <p class="text-lg"><strong>Gjinia:</strong> {{ $qytetar->Gjinia }} </p>
    <p class="text-lg"><strong>Viti i Lindjes:</strong> {{ $qytetar->viti_i_lindjes }} </p>
</div>
</main>
<footer class="bg-green-800 text-white py-4 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p>Laravel Project. Të gjitha të drejtat e rezervuara.</p>
        </div>
    </footer>
</body>
</html>