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
                    <h4 class="text-center">Welcome <span style="color: #1c7430">{{$students->First_name}}&nbsp;{{$students->Middle_Name}}!</span></h4>
                    <hr>
                </div>
                <div class="col-lg-8">
                    <h6>{{$students->Surname}}'s profile</h6>
                    <hr>
                    <table class="table table-striped">
                        <thead>

                        </thead>
                        <tbody>
                            <tr>
                                <td><b>Student ID</b></td>
                                <td>{{$students->RegNo}}</td>

                            </tr>
                            <tr>
                                <td><b>Date of Birth</b></td>
                                <td>{{$students->DOB}}</td>

                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>{{$students->email}}</td>

                            </tr>
                            <tr>
                                <td><b>Phone Number</b></td>
                                <td>{{$students->Phone}}</td>

                            </tr>
                            <tr>
                                <td><b>Degree</b></td>
                                <td>{{$students->Course}}</td>
                            </tr>
                            <tr>
                                <td><b>Address</b></td>
                                <td>{{$students->County}}</td>
                            </tr>
                            <tr>
                                <td><b>Year joined</b></td>
                                <td>{{$students->Year_joined}}</td>
                            </tr>

                            <tr>
                                <td><b>Gender</b></td>
                                <td>{{$students->gender}}</td>
                            </tr>
                            <tr>


                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    <ul class="list-group">
                        <center>
                           @if($students->Avatar === "noimage.jpg")
                               <img style="border-radius: 50%;width: 150px;height: 150px;" src="{{ asset('avatar/avatar.jpg') }}"  alt="">
                            @else
                              <img style="border-radius: 50%;width: 150px;height: 150px;" src="/storage/cover_images/{{$students->Avatar}}" alt="">
                            @endif
                       
                        </center>

                        <li style="text-align: center;" class="list-group-item">{{$students->First_name}}&nbsp;{{$students->Middle_Name}}&nbsp;{{$students->Surname}}</li><br>
                        @if(is_null($students->verification))
                        <td><a style="font-size: 17px;" class="btn btn-primary" href="/Student/{{$students->id}}/verify">Verify</a></td>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection