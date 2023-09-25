<form action="{{ route('project.store') }}" method="POST">
    @method('POST')
    @csrf
        <label>Name : </label>
        <input name="name"/>
        <button type="submit" class="btn btn-sm text-danger" style="margin-left:10px">Submit </button>

</form>
