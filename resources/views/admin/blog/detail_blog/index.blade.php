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
                            <h2>Blog Details Page</h2>
                        </div>
                        <div class="card-body">
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Details Page</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <tr>
                                                <th>Blog Id</th>
                                                <td>{{$blog->id}}</td>
                                            </tr>
                                            <tr>
                                                <th>Blog Main Title</th>
                                                <td>{{$blog->main_title}}</td>
                                            </tr>

                                            <tr>
                                                <th>Blog Sub Title</th>
                                                <td>{{$blog->sub_title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Blog Short Description</th>
                                                <td>{!! $blog->short_description !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Blog Short Description</th>
                                                <td>{!! $blog->long_description !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Blog Image</th>
                                                <td><img src="{{asset($blog->image)}}" alt="" height="200" width="200"></td>
                                            </tr> <tr>
                                                <th>Blog Author Name and Id</th>
                                                <td>{{\App\Models\User::find($blog->author_id)->name}}-({{$blog->author_id}})</td>
                                            </tr>
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
