<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}. {{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <div style="display:flex">
                    <a href="{{ url('users',$user->id)}}">Show</a>
                    <form action="{{ route('user.destroy',['users'=>[$user->id]]) }}" method="POST">
                        @method('DELETE')
                        @csrf

                            <button type="submit" class="btn btn-sm text-danger" style="margin-left:10px">Delete </button>

                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

</table>
