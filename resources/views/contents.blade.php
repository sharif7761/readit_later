<section>
    <h1>Titles Your Pocket Content</h1>
    @foreach($pocket_contents as $pocket_content)
        <p>{{ $pocket_content->url }}</p>
    @endforeach
</section>
