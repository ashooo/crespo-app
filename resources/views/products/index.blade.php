<x-layout>
    <x-slot:heading>
        Product List
    </x-slot:heading>

    <div style="max-width: 900px; margin: auto; padding: 20px; font-family: Arial, sans-serif;">

        <h2 style="text-align: center; margin-bottom: 20px;">📦 Product List</h2>

        <x-table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['category'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </x-table>
    </div>

    <style>
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4e73df;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e6ea;
        }
    </style>
</x-layout>