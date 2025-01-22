<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
</head>
<body>
<header class="bg-yellow-600 text-white">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <span class="text-2xl font-semibold">Edit Qytetar</span>
    </header>
    <main class="container mx-auto px-4 py-8 flex-grow">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Qytetar</h1>

    <a href="{{ url('/') }}" class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700 focus:outline-none focus-ring focus:ring-yellow-500">&larr; Kthehu tek tabela</a>

    <form action="{{ url('/qytetaret/' . $qytetar->id) }}" method="POST"
        id="updateForm" class="bg-white shadow-w rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="emri" class="block text-gray-700 font-medium mb-2">Emri:</label>
            <input type="text" name="emri" id="emri" value="{{ $qytetar->emri }}" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-yellow-500">
        </div>
        <div class="mb-4">
            <label for="mbiemri" class="block text-gray-700 font-medium mb-2">Mbiemri:</label>
            <input type="text" name="mbiemri" id="mbiemri" value="{{ $qytetar->mbiemri }}" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-yellow-500">
        </div>
        <div class="mb-4">
            <label for="gjinia" class="block text-gray-700 font-medium mb-2">Gjinia:</label>
            <select name="gjinia" id="gjinia" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-yellow-500">
                <option value="M" {{ $qytetar->gjinia == 'M' ? 'selected' : '' }}>Male</option>
                <option value="F" {{ $qytetar->gjinia == 'F' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="viti_i_lindjes" class="block text-gray-700 font-medium mb-2">Viti i Lindjes:</label>
            <input type="number" name="viti_i_lindjes" id="viti_i_lindjes"
            value="{{ $qytetar->viti_i_lindjes }}" required min="1900" max="{{ date('Y') }}"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-yellow-500">
        </div>
        </thead>
        <button type="submit"
        class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700 focus:outline-none focus-ring focus:ring-yellow-500">Update</button>
</form>
</main>
<footer class="bg-yellow-800 text-white py-4 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p>Laravel Project. Të gjitha të drejtat e rezervuara.</p>
        </div>
    </footer>
    <script>
        document.getElementById('updateForm').addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                icon: 'success',
                title: 'Updated Successfully!',
                text: 'Qytetaro u perditsua me sukses.',
                timer: 2000,
                showConfirmButton: false,
                didClose: ()=> {
                    this.submit();
                }
            });
        });
    </script>
</body>
</html>