@extends('simulation.app')
@section('page-title', "Computer Information")
@section('content')
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->

        
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
                            <p>Start Time: <span>{{$computer->start_time}}</span></p>
                        </div>
                        <div>
                            <p>End Time: <span>{{$computer->end_time}}</span></p>
                        </div>

                        <div>
                            <p>Total Time Used: <span>{{$computer->total_time_used}}</span></p>
                        </div>

                        <div>
                            <p>Last User: <span>{{$computer->last_user}}</span></p>
                        </div>

                        <div>
                            <p>Last Used Time: <span>{{$computer->last_use_time}}</span></p>
                        </div>


                    </div>
                </div>
            </div>


            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('updatecomputer', $computer->id)}}" >
                            @csrf
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{$computer->name}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Price Per Hour</label>
                                <input name="price_per_hour" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->price_per_hour}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Total Price</label>
                                <input name="total_price" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->total_price}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Operating System</label>
                                <input name="operating_system" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->operating_system}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Processor </label>
                                <input name="processor" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->processor}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Ram</label>
                                <input name="ram" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->ram}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Graphics Card</label>
                                <input name="graphics_card" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->graphics_card}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Storage</label>
                                <input name="storage" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->storage}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Location</label>
                                <input name="location" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->location}}">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Notes</label>
                                <input name="notes" class="form-control" id="inputUsername" type="text" placeholder="" value="{{$computer->notes}}">
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
