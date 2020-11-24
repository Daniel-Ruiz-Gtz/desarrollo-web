@if ($errors->any())
    <div class="card-alert alert alert-warning mb-0">
        <ul class="m-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
