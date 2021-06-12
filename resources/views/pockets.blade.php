<section>
    <h1>Titles Your Pocket List</h1>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Contents</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pockets as $pocket)
        <tr>
            <td>{{$pocket->title}}</td>
            <td><a href="{{ route('pocket.contents', $pocket->id) }}">show</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</section>
