<a href="{{ route('employee.edit', $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
<form action="{{ route('employee.destroy', $row->id) }}" method="POST" style="display:inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
