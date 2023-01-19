@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h4 style="float:left;">Add User</h4>
                         <a href="#" style="float: right;" class="btn btn-primary"
                         data-bs-toggle="modal" data-bs-target="#addUser">
                            <i class="fa fa-plus"></i> Add New User</a></div>
                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key=>$user)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>@if($user->is_admin == 1) Admin
                                            @else Cashier
                                             @endif </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#editUser{{ $user->id }}"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUser{{ $user->id }}"><i class="fa fa-trash"></i> Del </a>
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- Edit Modal --}}
                                    <div class="modal right fade" id="editUser{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title fs-5" id="staticBackdropLabel">Edit User</h4>
                                            <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>
                                            <div class="modal-body">
                                                <form  action="{{ route('users.update',$user->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <label for="" >Name</label>
                                                        <input type="text" name="name" id="" value="{{ $user->name }}" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="email" name="email" id="" value="{{ $user->email }}" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Password</label>
                                                        <input type="password" name="password" id="" value="{{ $user->password }}" readonly class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Role</label>
                                                       <select name="is_admin" id="" class="form-control">
                                                            <option value="1" @if($user->is_admin==1) selected @endif>Admin</option>
                                                            <option value="2"@if($user->is_admin==2) selected @endif>Cashier</option>
                                                       </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-warning btn-block">Update User</button>
                                                    </div>

                                                </form>

                                            </div>

                                           </div>
                                        </div>
                                </div>

                                    {{-- delete modal --}}
                                    <div class="modal right fade" id="deleteUser{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title fs-5" id="staticBackdropLabel">Delete User</h4>
                                            <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>
                                            <div class="modal-body">
                                                <form  action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                   <p>Are you sure you want to delete <b> {{ $user->name }} ?</b></p>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger" style="background: red;" >Delete</button>
                                                    </div>

                                                </form>

                                            </div>

                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"><h4>Search User</h4></div>
                        <div class="card-body">
                           ....................
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Model of adding New User --}}
        <div class="modal right fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title fs-5" id="staticBackdropLabel">Add User</h4>
                    <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <form  action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" >Name</label>
                                <input type="text" name="name" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirm_password" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Role</label>
                               <select name="is_admin" id="" class="form-control">
                                    <option value="1">Admin</option>
                                    <option value="2">Cashier</option>
                               </select>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary btn-block">Save User</button>
                            </div>

                        </form>

                    </div>

                   </div>
                </div>
        </div>
            {{-- Model for edit user --}}

            <style>
                .modal.right .modal-dialog{
                    top: 0;
                    right: 0;
                    margin-right: 20vh;
                }
                .modal.fade:not(.in).right .modal-diolog{
                    -webkit-transform: translate3d(25%,0,0);
                    transform: translate3d(25%,0,0);
                }
            </style>
@endsection
