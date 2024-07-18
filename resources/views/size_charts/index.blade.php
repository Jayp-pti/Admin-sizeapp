<!DOCTYPE html>
<html>

<head>
    <title>Size Charts</title>
</head>

<body>
    <h1>Size Charts</h1>
    <a href="{{ route('size_charts.create') }}">Add New Size Chart</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Fields</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sizeCharts as $sizeChart)
            <tr>
                <td>{{ $sizeChart->name }}</td>

                <td>
                    <ul>
                        @foreach ($sizeChart->fields as $field)
                        <li>
                            @if ($field->field_value !== null)
                            @php
                            $field_values = json_decode($field->field_value, true);
                            @endphp

                            @foreach (json_decode($field_values, true) as $data)
                <td>{{ $data[''] }}</td>
                <td>{{ $data['Chest'] }}</td>
                <td>{{ $data['Waist'] }}</td>
                <td>{{ $data['Hip'] }}</td>
                <td>{{ $data['UK'] }}</td>
                <td>{{ $data['EUR'] }}</td>
                <td>{{ $data['AUS'] }}</td>
                @endforeach
                @else
                <span>No field value available</span>
                @endif
                </li>
                @endforeach
                </ul>
                </td>
                <td>
                    <a href="{{ route('size_charts.edit', $sizeChart->id) }}">Edit</a>
                    <form action="{{ route('size_charts.destroy', $sizeChart->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>