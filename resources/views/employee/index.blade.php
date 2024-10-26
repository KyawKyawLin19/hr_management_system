@extends('layouts.app_nav')
@section('title', 'List of Employees')
@section('content')
    <div>
        <a href="" class="btn btn-theme btn-sm"><i class="fas fa-plus"></i> Create Employee</a>
    </div>
    <div class="card mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td class="d-flex justify-content-start">
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this employee?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ms-3"><i class="fas fa-remove"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
