@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div id="side-nav" style="height: 100vh !important;" class="col-lg-2">
            <div id="side-nav-overlay">
                @include('inc.admin-sidenav')
            </div>
        </div>
        <div class="col-lg-10">

            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center">Welcome <span style="color: #1c7430">{{$alumni->First_Name}}&nbsp;{{$alumni->Middle_Name}}!</span></h4>
                    <hr>
                </div>
                <div class="col-lg-8">
                    <h6>{{$alumni->Surname}}'s profile</h6>
                    <hr>
                    <table class="table table-striped">
                        <thead>

                        </thead>
                        <tbody>

                            <tr>
                                <td><b>Email</b></td>
                                <td>{{$alumni->email}}</td>

                            </tr>
                            <tr>
                                <td><b>Phone Number</b></td>
                                <td>{{$alumni->Phone_Number}}</td>

                            </tr>
                            <tr>
                                <td><b>Degree</b></td>
                                <td>{{$alumni->Course}}</td>

                            </tr>
                            <tr>
                                <td><b>Profession</b></td>
                                <td>{{$alumni->Profession}}</td>

                            </tr>
                            <tr>
                                <td><b>Work station</b></td>
                                <td>{{$alumni->Work_station}}</td>
                            </tr>
                            <tr>
                                <td><b>Location</b></td>
                                <td>{{$alumni->Location}}</td>
                            </tr>
                            <tr>
                                <td><b>Year joined</b></td>
                                <td>{{$alumni->Year_joined}}</td>
                            </tr>
                            <tr>
                                <td><b>Year graduated</b></td>
                                <td>{{$alumni->Year_graduated}}</td>
                            </tr>
                            <tr>
                                <td><b>Gender</b></td>
                                <td>{{$alumni->gender}}</td>
                            </tr>
                            <tr>
                                
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    <ul class="list-group">
                        <center>
                            @if($alumni->Avatar === "noimage.jpg")
                               <img style="border-radius: 50%;width: 150px;height: 150px;" src="{{ asset('avatar/avatar.jpg') }}"  alt="">
                            @else
                              <img style="border-radius: 50%;width: 150px;height: 150px;" src="/storage/cover_images/{{$alumni->Avatar}}" alt="">
                            @endif
                        </center>

                        <li style="text-align: center;" class="list-group-item">{{$alumni->First_Name}}&nbsp;{{$alumni->Middle_Name}}&nbsp;{{$alumni->Surname}}</li><br>
                        @if(is_null($alumni->verification))
                        <td><a style="font-size: 17px;" class="btn btn-primary" href="/Alumni/{{$alumni->id}}/verify">Verify</a></td>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection