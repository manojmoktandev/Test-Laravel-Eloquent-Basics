<form action="{{ route('project.update') }}" method="POST">
    @method('PUT')
    @csrf
        <label>Name : </label>
        <input name="old_name" value="{{$project->name}}" type="hidden"/>
        <input name="new_name" value="{{$project->name}}" />
        <button type="submit" class="btn btn-sm text-danger" style="margin-left:10px">Submit </button>

</form>
