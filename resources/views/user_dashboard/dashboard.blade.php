@extends('user_dashboard.layout.master')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <!-- Own Working Space -->
            Welcome
            <div class="row">


                <div class="card text-white bg-secondary mb-4 " style="max-width: 18rem;">

                    <a href="{{ url('profile') }}">
                        <div class="card-body">
                            <h5 class="card-title">Profile</h5>
                            <p class="card-text">All users info</p>
                        </div>
                    </a>

                </div>
                <div class="card text-white bg-secondary mb-4 m-auto" style="max-width: 18rem;">
                    <a href="{{ url('building') }}">
                        <div class="card-body">
                            <h5 class="card-title">House Info</h5>
                            <p class="card-text">house detais area and othes</p>
                        </div>
                    </a>

                </div>
                <div class="card text-white bg-secondary mb-4" style="max-width: 18rem;">
                    <a href="{{ url('flat') }}">
                    <div class="card-body">
                        <h5 class="card-title">Unit information</h5>
                        <p class="card-text">Flat floor and othtes details.</p>
                    </div>
                    </a>
                </div>
                <div class="card text-white bg-secondary mb-4" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Tenents profile</h5>
                        <p class="card-text">.</p>
                    </div>
                </div>
                <div class="card text-dark bg-secondary mb-4 m-sm-auto" style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">Meeting Scheduling</h5>
                        <p class="card-text">Meeting... detiles</p>
                    </div>
                </div>
                <div class="card text-dark bg-secondary mb-4" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Notice and Complain</h5>
                        <p class="card-text">.</p>
                    </div>
                </div>


                <div class="card text-white bg-secondary mb-4 " style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">Visitor info</h5>
                        <p class="card-text">All users info</p>
                    </div>
                </div>
                <div class="card text-white bg-secondary mb-4 m-auto" style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">Car Parking</h5>
                        <p class="card-text">house detais area and othes</p>
                    </div>
                </div>
                <div class="card text-white bg-secondary mb-4" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Maintenance cost</h5>
                        <p class="card-text">Flat floor and othtes details.</p>
                    </div>
                </div>


                <div class="card text-white bg-secondary mb-4 " style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">Utility Bll</h5>
                        <p class="card-text">All users info</p>
                    </div>
                </div>
                <div class="card text-white bg-secondary mb-4 m-auto" style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">Othres Profile</h5>
                        <p class="card-text">house detais area and othes</p>
                    </div>
                </div>
                <div class="card text-white bg-secondary mb-4" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Designation</h5>
                        <p class="card-text">.</p>
                    </div>
                </div>

            </div>
        </div>
    @endsection
