<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Students</li>
        </ol>
      </nav>



      <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
            Add Student
        </button>
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addStudentLabel">Add Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" wire:submit.prevent="store()">
                <div class="form-group">
                    <input type="text" name="student_first_name" class="form-control" placeholder="Student First Name ..." wire:model="student_first_name">
                    @error('student_first_name') <span class="error" style="color: rgb(60, 19, 19)">{{ $message }}</span> @enderror

                </div>
                <br>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Student Last Name ..." wire:model="student_last_name">
                    @error('name')
                    <div  style="display: block">
                       {{ $message }}
                    </div>
                    @enderror
                </div>
                <br>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Code ..." wire:model="code">
                    @error('name')
                    <div  style="display: block">
                       {{ $message }}
                    </div>
                    @enderror
<br>
</div>
{{-- department_id --}}
                {{-- <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Student Name ..." wire:model="student_name">
                    @error('name')
                    <div  style="display: block">
                       {{ $message }}
                    </div>
                    @enderror
                </div>
<br>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Student Name ..." wire:model="student_name">
                    @error('name')
                    <div  style="display: block">
                       {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Student Name ..." wire:model="student_name">
                    @error('name')
                    <div  style="display: block">
                       {{ $message }}
                    </div>
                    @enderror
                </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
</div>
