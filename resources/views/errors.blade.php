@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="ui negative message">
            <div class="header">Something's wrong...</div>
            <p>{{ $error}}</p>
        </div>
    @endforeach
@endif
