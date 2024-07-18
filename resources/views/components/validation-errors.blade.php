@if ($errors->any())
    <div {{ $attributes }}>

        <ul class="mt-3 mb-3 list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger" role="alert">
                    {{ $error }}
                </p>
            @endforeach
        </ul>
    </div>
@endif
