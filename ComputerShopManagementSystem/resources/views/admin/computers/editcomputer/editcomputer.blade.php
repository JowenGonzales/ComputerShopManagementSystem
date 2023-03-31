@extends('admin.app')
@section('page-title', "Edit Computer")
@section('content')
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="account-profile.html">Profile</a>
            <a class="nav-link" href="account-billing.html">Billing</a>
            <a class="nav-link" href="account-security.html">Security</a>
            <a class="nav-link" href="account-notifications.html">Notifications</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Information</div>
                    <div class="card-body ">
                        <div>
                            <p>Status: <span>{{$computer->name}}</span></p>
                        </div>

                        <div>
                            <p>End Time: <span>{{$computer->name}}</span></p>
                        </div>

                        <div>
                            <p>Total Time Used: <span>{{$computer->name}}</span></p>
                        </div>

                        <div>
                            <p>Last User: <span>{{$computer->name}}</span></p>
                        </div>

                        <div>
                            <p>Last Used Time: <span>{{$computer->name}}</span></p>
                        </div>


                    </div>
                </div>
            </div>


            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('user.view', $computer->id)}}" >
                            @csrf
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Price Per Hour</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Total Price</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Operating System</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Processor </label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Ram</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Graphics Card</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Storage</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Location</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Notes</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>


                            <!-- Form Row-->

                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
