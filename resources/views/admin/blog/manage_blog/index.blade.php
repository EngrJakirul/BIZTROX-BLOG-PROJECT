@extends('admin.master')

@section('title')
    Manage Blog
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h2>Blog Manage Page</h2>
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
                                                <th>#SL NO</th>
                                                <th>Blog Category Name</th>
                                                <th>Blog Title</th>
                                                <th>Author Name</th>
                                                <th>Feature Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($blogs as $blog)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$blog->category->name}}</td>
                                                    <td>{{$blog->main_title}}</td>
                                                    <td>{{\App\Models\User::find($blog->author_id)->name}}</td>
                                                    <td>
                                                        <img src="{{$blog->image}}" alt="" height="100" width="100">
                                                    </td>
                                                    <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                    <td>
                                                        <a href="{{route('blog.detail', ['id' => $blog->id])}}" onclick="return confirm('Are you sure want to see details this...')" class="btn btn-warning btn-sm btn-hover"><i class="fa fa-book-open"></i></a>
                                                        <a href="{{route('blog.status', ['id' => $blog->id])}}" onclick="return confirm('Are you sure want to Published this...')" class="btn btn-warning btn-sm btn-hover"><i class="fa fa-arrow-up"></i></a>
                                                        <a href="{{route('blog.edit', ['id' => $blog->id])}}" onclick="return confirm('Are you sure want to edit this...')" class="btn btn-warning btn-sm btn-hover"><i class="fa fa-edit"></i></a>
                                                        <a href="{{route('blog.delete', ['id' => $blog->id])}}" onclick="return confirm('Are you sure want to delete this...')" class="btn btn-danger btn-sm btn-hover"><i class="fa fa-trash"></i></a>
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
