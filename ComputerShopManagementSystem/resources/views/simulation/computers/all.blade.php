@extends('simulation.app')
@section('page-title', "All Computers")
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-start" >

            @foreach($computers as $computer)
                <div class="card mb-4 py-3 border-left-primary space-b mr-3 px-5
                    @switch($computer->status)
                        @case('ONLINE')
                            border-left-success
                            @break
                        @case('OFFLINE')
                            border-left-dark
                            @break
                    @endswitch
                 ">
                    <div class="card-body text-center">

                        <div>
                            {{$computer->name}}
                            <i class="bi bi-pc-display-horizontal"></i>
                        </div>
                        <div>

                            <span class="badge badge-primary
                            @switch($computer->status)
                                @case('ONLINE'):
                                    badge badge-success
                                    @break
                                @case('OFFLINE')
                                    badge badge-dark
                                    @break

                            @endswitch
                            ">
                                {{$computer->status}}</span>
                        </div>
                        <div>
                                <a href="#" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="bi bi-three-dots"></i></a>

                                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                                    <a class="dropdown-item login-computer" data-toggle="modal" id="actiondelete" data-target="#exampleModal" id="" data-user-id="{{$computer->id}}" data-pc-name="{{$computer->name}}"  >Login</a>
                                    <a class="dropdown-item" href="{{route('computers.show', $computer->id)}}">Information</a>
                                </div>

                        </div>
                    </div>

                </div>
            @endforeach



                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login <span class="useridtext text-primary" ></span></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="POST" >
                                    @csrf
                                    <input type="hidden" id="userid" name="userid" class="userid">

                                    <div>
                                        <label>Name</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div>
                                        <label>Password</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <form method="POST" >
                                    @csrf
                                    <input type="hidden" id="userid" name="userid" class="userid">

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>

@endsection
@section('body-scripts')
    <script>
        $(document).ready(function() {
            $('.login-computer').click(function () {
                var userID = $(this).data('user-id');
                var computerName =  $(this).data('pc-name');
                $('.useridtext').text(computerName);
                $('#userid').val(userID);
            });
        });
    </script>
@endsection
