@extends('admin.master')

@section('title')
    manage-category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h2>Category Manage Page</h2>
                        </div>
                        <div class="card-body">
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Data Table</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>#SL</th>
                                                <th>Category Name</th>
                                                <th>Category Description</th>
                                                <th>Category Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$category->name}}</td>
                                                    <td>{{$category->description}}</td>
                                                    <td>
                                                        <img src="{{$category->image}}" alt="" height="100" width="100">
                                                    </td>
                                                    <td>{{$category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                    <td>
                                                        <a href="{{route('category.edit', ['id'   => $category->id])}}" onclick="return confirm('Are you sure want to edit this...')" class="btn btn-warning btn-sm btn-hover"><i class="fa fa-edit"></i></a>
                                                        <a href="{{route('category.delete', ['id' => $category->id])}}" onclick="return confirm('Are you sure want to delete this...')" class="btn btn-danger btn-sm btn-hover"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
