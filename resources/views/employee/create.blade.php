    @extends('layouts.app_nav')
    @section('title', 'Create Employee')
    @section('content')
        <div class="card">
            <div class="card-body">
                <form action="" method="post" autocomplete="off">
                    @csrf
                    <div class="md-form">
                        <label for="">Employee ID</label>
                        <input type="text" id="employee_id" name="employee_id" class="form-control">
                    </div>

                    <div class="md-form">
                        <label for="">Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>

                    <div class="md-form">
                        <label for="">Phone</label>
                        <input type="number" id="phone" name="phone" class="form-control">
                    </div>

                    <div class="md-form">
                        <label for="">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>

                    <div class="md-form">
                        <label for="">NRC Number</label>
                        <input type="text" id="nrc_number" name="nrc_number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="md-form">
                        <label for="">Birthday</label>
                        <input type="text" id="birthday" name="birthday" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @section('external_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script>
        $(document).ready(function() {
            $('#birthday').datepicker({
                "singleDatePicker": true,
            });
        });
    </script>
    @endsection
