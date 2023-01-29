@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Profiles
                        <div class="btn btn-primary btn-sm float-end">
                            Add Student
                        </div>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Delete / Edit</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Student</td>
                                <td>Ahmed</td>
                                <td>Ahmed</td>
                                <td>
                                    <div class="btn btn-primary btn-sm">Edit</div>
                                    <div class="btn btn-danger btn-sm">Delete</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Student</td>
                                <td>Ahmed</td>
                                <td>Ahmed</td>
                                <td>
                                    <div class="btn btn-primary btn-sm">Edit</div>
                                    <div class="btn btn-danger btn-sm">Delete</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Student</td>
                                <td>Ahmed</td>
                                <td>Ahmed</td>
                                <td>
                                    <div class="btn btn-primary btn-sm">Edit</div>
                                    <div class="btn btn-danger btn-sm">Delete</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
