<!DOCTYPE html>
<html>
<head>
    <title>{{ isset($sizeChart) ? 'Edit Size Chart' : 'Add Size Chart' }}</title>
    <style>
        .field-row {
            margin-bottom: 10px;
        }
    </style>
    <script>
        function addField() {
            const fieldsContainer = document.getElementById('fields-container');
            const fieldRow = document.createElement('div');
            fieldRow.classList.add('field-row');

            const fieldName = document.createElement('input');
            fieldName.setAttribute('type', 'text');
            fieldName.setAttribute('name', 'fields[][field_name]');
            fieldName.setAttribute('placeholder', 'Field Name');
            fieldName.required = true;

            const fieldValue = document.createElement('input');
            fieldValue.setAttribute('type', 'text');
            fieldValue.setAttribute('name', 'fields[][field_value]');
            fieldValue.setAttribute('placeholder', 'Field Value');
            fieldValue.required = true;

            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.innerText = 'Remove';
            removeButton.onclick = function() {
                fieldsContainer.removeChild(fieldRow);
            };

            fieldRow.appendChild(fieldName);
            fieldRow.appendChild(fieldValue);
            fieldRow.appendChild(removeButton);
            fieldsContainer.appendChild(fieldRow);
        }
    </script>
</head>
<body>
    <h1>{{ isset($sizeChart) ? 'Edit Size Chart' : 'Add Size Chart' }}</h1>
    <form action="{{ isset($sizeChart) ? route('size_charts.update', $sizeChart->id) : route('size_charts.store') }}" method="POST">
        @csrf
        @if(isset($sizeChart))
            @method('PUT')
        @endif
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $sizeChart->name ?? '') }}" required>
        <br>
        <div id="fields-container">
            @if(isset($sizeChart))
                @foreach($sizeChart->fields as $field)
                    <div class="field-row">
                        <input type="text" name="fields[][field_name]" value="{{ old('fields.' . $loop->index . '.field_name', $field->field_name) }}" placeholder="Field Name" required>
                        <input type="text" name="fields[][field_value]" value="{{ old('fields.' . $loop->index . '.field_value', $field->field_value) }}" placeholder="Field Value" required>
                        <button type="button" onclick="this.parentElement.remove()">Remove</button>
                    </div>
                @endforeach
            @endif
        </div>
        <button type="button" onclick="addField()">Add Field</button>
        <br>
        <button type="submit">{{ isset($sizeChart) ? 'Update' : 'Add' }}</button>
    </form>
</body>
</html>
