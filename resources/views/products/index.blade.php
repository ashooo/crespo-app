<div style="max-width: 900px; margin: auto; padding: 20px; font-family: Arial, sans-serif;">

    <!-- Product List Table -->
    <h2 style="text-align: center; margin-bottom: 20px;">📦 Product List</h2>

    <table>
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
                    <td>{{ $product['id']}}</td>
                    <td>{{ $product['name']}}</td>
                    <td>{{ $product['category']}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Tasks Section -->
    <h2 style="text-align: center; margin-top: 40px;">✅ Tasks</h2>
    <ul style="list-style: none; padding: 0;">
        @forelse ($tasks as $task)
            <li style="background: #f4f6ff; margin-bottom: 10px; padding: 12px 15px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
                {{ $task }}
            </li>
        @empty
            <li style="text-align: center; padding: 12px; color: #777;">No tasks found.</li>
        @endforelse
    </ul>

    <!-- Global Variables -->
    <div style="margin-top: 30px; background: #fff; border-left: 5px solid #4e73df; padding: 15px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
        <p><strong>Shared Variable:</strong> {{ $sharedVariable ?? 'Not set' }}</p>
        <p><strong>Product Key:</strong> {{ $productKey ?? 'Not set' }}</p>
    </div>

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