<div>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: #f0f2f5;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #4e73df;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin: 0 auto 40px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        thead {
            background-color: #4e73df;
            color: white;
        }

        th, td {
            padding: 12px 20px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #e2e6ea;
            transform: scale(1.01);
            transition: all 0.2s ease-in-out;
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            th, td {
                text-align: right;
                padding: 10px;
                position: relative;
            }
            th::before, td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                font-weight: bold;
                text-transform: uppercase;
            }
        }
    </style>

    <h1>📦 Product List</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td data-label="ID">{{ $product['id'] }}</td>
                    <td data-label="Name">{{ $product['name'] }}</td>
                    <td data-label="Category">{{ $product['category'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>