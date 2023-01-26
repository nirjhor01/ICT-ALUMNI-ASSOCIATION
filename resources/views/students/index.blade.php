@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div id="side-nav" style="height: auto !important;" class="col-lg-2">
            <div id="side-nav-overlay">
                @include('inc.admin-sidenav')
            </div>
        </div>
        <div class="col-lg-10">
            <h4 style="color: green" class="text-center">Registered students</h4>
            @if (Session::has('message'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! Session::get('message') !!}</li>
                </ul>
            </div>
            @endif
            <hr>
            @include('inc.messages')
            <div class="container">
                <div class="row">
                    <table id="studentstable" class="table table-striped table-bordered" style="width:100%">
                        <thead style="text-align: center ;">
                            <tr>

                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Surname</th>
                                <th>Registration number</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody style="text-align: center ;">
                            @foreach($posts as $post)
                            <tr>

                                <td>{{$post->First_name}}</td>
                                <td>{{$post->Middle_name}}</td>
                                <td>{{$post->Surname}}</td>
                                <td>{{$post->RegNo}}</td>
                                <td>
                                    <a style="font-size: 17px;" class="btn btn-primary" href="/Student/{{$post->id}}/view">View</a>
                                    @if(is_null($post->verification))
                                    <a style="font-size: 17px;" class="btn btn-success" href="/Student/{{$post->id}}/verify">Verification</a>
                                    @endif
                                    <!-- @if($post->isBlocked==true)
                                        <a class="btn  btn-danger btn-lg">Blocked</a>
                                    @endif -->
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot style="text-align: center ;">
                            <tr>

                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Surname</th>
                                <th>Registration number</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection