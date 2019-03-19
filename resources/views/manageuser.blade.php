@section('title', 'Manage Users')
@extends('layouts.design2')
@section('content')
            <!-- sales report area start -->
            <hr style="border-color: #9e0039;">
                    <!-- nav tab start -->
                    <div class="col-lg-12 mt-6">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">View Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Manage Users</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- Dark table start -->
                                        <div class="col-12 mt-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h3 class="header-title">View Users Data</h3>
                                                    <div class="data-tables datatable-dark">
                                                        <table id="dataTable3" class="text-center">
                                                            <thead class="text-capitalize">
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>username</th>
                                                                    <th>Phone No</th>
                                                                    <th>Email</th>
                                                                    <th>Address</th>
                                                                    <th>Malaysia</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                @foreach($users as $user)
                                                                    <td>{{ $user->name }}</td>
                                                                    <td>{{ $user->email }}</td>
                                                                    <td>{{ $user->email }}</td>
                                                                    <td>{{ $user->email }}</td>
                                                                    <td>{{ $user->email }}</td>
                                                                    <td>{{ $user->email }}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Dark table end -->
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <!-- table primary start -->
                                        <div class="col-lg-12 mt-5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="header-title">Manage Users</h4>
                                                    <div class="single-table">
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead class="text-uppercase bg-dark">
                                                                    <tr class="text-white">
                                                                        <th scope="col">ID</th>
                                                                        <th scope="col">Name</th>
                                                                        <th scope="col">Phone Number</th>
                                                                        <th scope="col">Email</th>
                                                                        <th scope="col">edit</th>
                                                                        <th scope="col">delete</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <th scope="row">1</th>
                                                                        <td>Azmir Shah</td>
                                                                        <td>askcoreunit</td>
                                                                        <td>+60176591091</td>
                                                                        <td><i class="fa fa-edit"></i></td>
                                                                        <td><i class="ti-trash"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Azrul Shah</td>
                                                                        <td>+60184737748</td>
                                                                        <td>azmirshah1@gmail.com</td>
                                                                        <td><i class="fa fa-edit"></i></td>
                                                                        <td><i class="ti-trash"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Kamilah Ahmad</td>
                                                                        <td>+60198383728</td>
                                                                        <td>kami.ahmad@gmail.com</td>
                                                                        <td><i class="fa fa-edit"></i></td>
                                                                        <td><i class="ti-trash"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Siti Zulaika</td>
                                                                        <td>+6012374758434</td>
                                                                        <td>zulaikaRash@gmail.com</td>
                                                                        <td><i class="fa fa-edit"></i></td>
                                                                        <td><i class="ti-trash"></i></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- table primary end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nav tab end -->
@endsection