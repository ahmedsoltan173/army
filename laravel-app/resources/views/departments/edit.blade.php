
@extends('layouts.main');
@section('body')
<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Departments</li>
          <li class="breadcrumb-item active" aria-current="page">edit</li>
        </ol>
      </nav>
      <form action="{{route('department.update',$department->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name"> Department Name</label>
            <input type="text" name="name" class="form-control" value="{{ $department->name }}" placeholder="Student First Name ..." >
            @error('name') <span class="error" style="color: rgb(60, 19, 19)">{{ $message }}</span> @enderror
        </div>
        <br>
        <button class="btn btn-primary" type="submit"> Update</button>
      </form>
</div>
@endsection
