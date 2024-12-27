    @extends('layouts.app_nav')
    @section('title', 'List of Employees')
    @section('content')
        <div>
            <a href="{{ route('employees.create') }}" class="btn btn-theme btn-sm"><i class="fas fa-plus"></i> Create Employee</a>
        </div>
        <div class="card mt-3">
            <table class="table dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Created At</th>
                        <th>Is Present</th>
                        <th col-span="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    @endsection
    @section('external_scripts')
    <script>
        $(function() {
            var table = $('.dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('employees.data') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'department_name', name: 'department_name'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'is_present', name: 'is_present'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                language: {
                    emptyTable: "<div class='alert alert-info'>No users found.</div>",
                }
            });
        });


        $(document).on('submit', 'form', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this user?')) {
                this.submit();
            }
        });


    </script>
    @endsection
