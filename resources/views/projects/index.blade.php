<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Destroy</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($projects as $project)
        <tr>
            <td>{{ $loop->iteration }}. {{ $project->name }}</td>
            <td style="display: flex">
                <form action="{{ route('project.show',$project->id) }}" method="POST">
                @method('POST')
                @csrf

                    <button type="submit" class="btn btn-sm text-danger" style="margin-left:10px">Edit </button>
                </form>

                <form action="{{ route('project.destroy',$project->id) }}" method="POST">
                @method('DELETE')
                @csrf

                    <button type="submit" class="btn btn-sm text-danger" style="margin-left:10px">Delete </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
