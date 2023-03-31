@extends('admin.app')
@section('page-title', 'Add Computer')
@section('content')
    <div class="card mb-4 py-3 border-left-primary">
        <div class="card-body">
            <div class="">
                <div>
                    <form method="POST" >
                        @csrf
                        <div class="" >
                            <label>Name</label>
                            <input type="text" class="form-control small " name="name" >
                        </div>


                        <div class="mt-5">
                            <input type="submit" class="form-control btn btn-primary" value="Add">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
