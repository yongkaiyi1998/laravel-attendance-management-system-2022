@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="justify-content-between">
                <h4>Student Management</h4>
            </div>
            <table class="table table-hover" style="width: 100%;">
                <thead>
                  <tr>
                    <th style="width: 5%;"></th>
                    <th style="width: 35%;">Name</th>
                    <th style="width: 25%;">Phone</th>
                    <th style="width: 10%;">Year</th>
                    <th style="width: 5%;">Gender</th>
                    <th style="width: 20%;"></th>
                  </tr>
                </thead>
                <tbody>
                    <?php $count = 0; ?>
                    @foreach ($students as $student)
                    <?php $count++; ?>
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['phone'] }}</td>
                        <td>{{ $student['year'] }}</td>
                        <td class="text-center">{{ $student['gender']=='male'?"M":"F" }}</td>
                        <td class="d-flex justify-content-evenly">
                            <a class="text-primary" href="#"><i class="bi bi-eye"></i></a>
                            <a class="text-success" href="#"><i class="bi bi-pencil-square"></i></a>
                            <a class="text-danger" href="#"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
