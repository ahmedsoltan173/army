
@extends('layouts.main');
@section('body')
<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Departments</li>
        </ol>
      </nav>


      <!-- Button trigger modal -->
        <a href="{{ route('department.create') }}" class="btn btn-primary"> Add Department</a>

        @if(Session::has('message'))
        <p class="alert alert-info">{{ Session('message') }}</p>
        @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Department Name </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
            <tr>
                <th scope="row">#</th>
                <td>{{ $department->name }}</td>
                <td><a href="{{ route('department.edit',$department->id) }}" class="btn btn-success">Edit</a></td>
                <td>
                    <a href="{{ route('department.delete',$department->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>

</div>
@endsection
