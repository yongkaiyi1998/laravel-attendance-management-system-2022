@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="justify-content-between row">
                <div class="col m-0 d-flex align-items-center">
                    <h4 class="col m-0 d-flex align-items-center">Student Management</h4>
                    <button type="button" id="add-btn" class="btn btn-secondary">+</button>
                </div>
                <div class="input-group border rounded-pill p-1 col">
                    <div class="input-group-prepend border-0">
                        <button id="search-btn" type="button" class="btn btn-link text-info"><i class="bi bi-search"></i></button>
                    </div>
                    <input type="search" placeholder="What're you searching for?" aria-describedby="search-btn" class="form-control bg-none border-0">
                </div>
            </div>
            <table class="table table-hover mt-4" style="width: 100%;">
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
                        <td class="d-flex justify-content-evenly" data-id="{{ $student['id'] }}">
                            <span class="text-primary view-btn" style="cursor: pointer;"><i class="bi bi-eye"></i></span>
                            <span class="text-success edit-btn" style="cursor: pointer;"><i class="bi bi-pencil-square"></i></span>
                            <span class="text-danger delete-btn" style="cursor: pointer;"><i class="bi bi-trash"></i></span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('pages.administrator.students.modal.modal')
@include('pages.administrator.students.modal.view')
{{-- route --}}
<script>
    let imageUrl = "{{ asset('images/') }}";
    let showStudentUrl = "{{ route('student.show') }}";
    let editStudentUrl = "{{ route('student.edit') }}";
</script>
<script src="{{ asset("js/administrator/students/index.js") }}"></script>
@endsection