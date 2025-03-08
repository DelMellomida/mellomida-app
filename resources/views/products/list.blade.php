<!-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> -->
<div class="p-6 bg-gray-100 rounded-lg shadow-lg">
    <p class="text-lg font-semibold mb-4">Products:</p>
    
    <div class="overflow-x-auto">
        <table class="w-full border border-gray-300 rounded-lg bg-white shadow-md">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="px-4 py-2 text-left">Id</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $product['id'] }}</td>
                        <td class="px-4 py-2">{{ $product['name'] }}</td>
                        <td class="px-4 py-2">{{ $product['category'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
