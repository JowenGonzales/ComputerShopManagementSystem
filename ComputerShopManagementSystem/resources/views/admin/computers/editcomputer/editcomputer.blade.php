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
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Upload new image</button>
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
                            <!-- Form Row-->

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Status</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Computer</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Computer</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Computer</label>
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
