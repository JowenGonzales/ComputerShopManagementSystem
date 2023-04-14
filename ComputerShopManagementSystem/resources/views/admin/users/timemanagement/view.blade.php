@extends('admin.app')
@section('page-title', "Time Management")
@section('content')
    <div class="card-body">
        <!-- Component Preview-->
        <div class="sbp-preview">
            <div class="sbp-preview-content">
                <h3>{{$customer->time_available}}</h3>
                <form method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="operation">
                            <option value="add">+</option>
                            <option value="subtract">-</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input class="form-control" id="exampleFormControlInput1" type="disabled" value="{{$customer->email}}" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1">Amount</label>
                        <input class="form-control" id="exampleFormControlInput1" type="number" name="amount">
                    </div>
                    <button class="btn btn-primary me-2 my-1" type="submit">Save Changes</button>

                </form>
            </div>
            </div>
    </div>
@endsection
