@extends('admin.app')
@section('page-title', 'Add User')
@section('content')
    <div class="card mb-4 py-3 border-left-primary">
        <div class="card-body">
            <div class="">
                <div>
                    <div class="">
                        <label>Name</label>
                        <input type="text" class="form-control small " placeholder="John Doe">
                    </div>
                    <div class="pt-3">
                        <label>Email</label>
                        <input type="email" class="form-control small " placeholder="johndoe@gmail.com">
                    </div>
                    <div class="pt-3" >
                        <label>Password</label>
                        <input type="password" class="form-control small " placeholder="12345678">
                    </div>
                    <div class="mt-5">
                        <input type="submit" class="form-control btn btn-primary" value="Add">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
