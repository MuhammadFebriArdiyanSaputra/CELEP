@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if ($errors->any())
    <div style="color: red; margin-bottom: 20px; margin-top: -20px;">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
    </div>
@endif