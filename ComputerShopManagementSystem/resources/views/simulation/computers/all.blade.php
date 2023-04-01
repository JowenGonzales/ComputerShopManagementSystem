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
                            <a href="#" ><i class="bi bi-three-dots"></i></a>

                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

@endsection
