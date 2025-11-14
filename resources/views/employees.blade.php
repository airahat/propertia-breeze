@extends("admin.layout.master")

@section("title", "Employees")

@section('content')

<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Employees</h2>
        <a href="/employees/create" class="btn btn-primary">
            <i class="fa-solid fa-user-plus me-1"></i> Add Employee
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Position</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>
                            <img src="https://files.idyllic.app/files/static/4035133?width=256&optimizer=image" class="rounded-circle" alt="Employee Photo" style="width: 50px; height: 50px;">
                        </td>
                        <td>Rahim Uddin</td>
                        <td>rahim@example.com</td>
                        <td>Sales Manager</td>
                        <td>+880 1760-123456</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <img src="https://files.idyllic.app/files/static/3871259" class="rounded-circle" alt="Employee Photo" style="width: 50px; height: 50px;">
                        </td>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>Property Agent</td>
                        <td>+880 1990-654321</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <img src="https://easy-peasy.ai/cdn-cgi/image/quality=95,format=auto,width=800/https://media.easy-peasy.ai/9038470c-9fb9-4d6b-a382-25fdd217b866/50041c32-4b84-43aa-a5da-a8e78f5885aa.png" class="rounded-circle" alt="Employee Photo" style="width: 50px; height: 50px;">
                        </td>
                        <td>Shakil Ahmed</td>
                        <td>shakil@example.com</td>
                        <td>Construction Supervisor</td>
                        <td>+880 1780-765432</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection