<x-layout>
    <x-slot:heading></x-slot:heading>
    <x-table>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td scope="row">{{ $product['id'] }}</td>
                        <td scope="row">{{ $product['name'] }}</td>
                        <td scope="row">{{ $product['category'] }}</td>
                    </tr>
                @endforeach
            </tbody>
    </x-table>
</x-layout>