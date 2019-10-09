@extends('layouts.app')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    
    @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

     <h1>Users/Roles</h1>
        <div class="user-list">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Role</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                 <tbody>
                    @foreach($users as $user)
                            <tr>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->name }} 
                                </td>
                                <td>
                                    <form style="display:inline-block" action="{{action('UserController@destroy', ['id' => $user->id])}}" method="post"> 
                                        @csrf
                                        @method('DELETE')
                                <button onclick="return confirm('Are you sure you want to Delete a ScanDepartment?')" class="btn btn-danger" type="submit">Delete</button>
                            </form>                               
                                </td>       
                            </tr>
                    @endforeach
            </table>
        </div>

        <div class="create-card">
            <div class="card-header">
                Create a new User/Role
            </div>
            <div class="card-body">
                <h5 class="card-title">Press the Create button to Create a new User/Role</h5>
                <a href="{{action('UserController@create')}}"class="btn btn-success">Create</a>
            </div>
        </div>


@endsection

