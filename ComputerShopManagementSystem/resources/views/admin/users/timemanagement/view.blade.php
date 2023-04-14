@extends('admin.app')
@section('page-title', "Time Management")
@section('content')
    <div class="card-body">
        <!-- Component Preview-->
        <div class="sbp-preview">
            <div class="sbp-preview-content">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>+</option>
                            <option>-</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input class="form-control" id="exampleFormControlInput1" type="email" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1">Amount</label>
                        <input class="form-control" id="exampleFormControlInput1" type="amount" >
                    </div>
                    <button class="btn btn-primary me-2 my-1" type="button">Save Changes</button>

                </form>
            </div>
            </div>
    </div>
@endsection
