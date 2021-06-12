<section>
    <h1>Titles Your Pocket Content</h1>
    @forelse($pocket_contents as $pocket_content)
        <p>{{ $pocket_content->url }}</p>
    @empty
        <p>No Content Found. Please add one.</p>
    @endforelse
</section>
