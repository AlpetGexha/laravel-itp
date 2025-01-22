<!DOCTYPE html>
<html>
<head>
    <title>Larvael</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">
    <h1 class="text-2xl font-bold mb-4">Lista e qyteteve</h1>
    <a href="{{ route('qytetet.create') }}"
               class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring focus:ring-green-500">
                Add New Qytet
            </a>

    </div>

    <div class="m-56">
      <table class="border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200 border border-gray-300">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Emri</th>
                <th class="border border-gray-300 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($qytetet as $qytet)
        <tr class="border-t">
            <td class="px-4 py-2">{{ $loop->iteration }}</td>
            <td class="px-4 py-2">{{ $qytet->name }}</td>
            <td class="px-4 py-2">
            <a href="{{ url('/qytetet/' . $qytet->id . '/edit') }}" 
                               class="bg-yellow-500 text-white ml-5 px-3 py-1 rounded hover:bg-yellow-600">
                               Edit
            </a>
                <form action="{{ route('qytetet.destroy', $qytet->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Qytet?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-500">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

    </table>
    </div>
  
</body>
</html>