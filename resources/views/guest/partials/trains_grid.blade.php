<ol>
    @foreach ($trains as $train)
        <li>{{ $train->company }}</li>
    @endforeach
</ol>
