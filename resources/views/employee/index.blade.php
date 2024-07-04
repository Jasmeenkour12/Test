<!DOCTYPE html>
<html>
<head>
    <title>Employee Hierarchy</title>
</head>
<body>
    <ul>
        @foreach($employees as $employee)
            @include('employee.partials.employee', ['employee' => $employee])
        @endforeach
    </ul>
</body>
</html>
