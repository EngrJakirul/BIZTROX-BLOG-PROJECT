@extends('admin.master')

@section('title')
    Category Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="card-header text-uppercase text-center text-dark">
                            <h2>Add Blog Form</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('blog.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Blog Category Name:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control" name="category_id" id="category_id" required>
                                            <option value="" disabled selected>------Select Blog Category Name------</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Blog Title</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="main_title" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Blog  Sub Title</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="sub_title" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Short Description:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="short_description" class="form-control summernote" id="short_description" cols="20" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Long Description:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="long_description" class="form-control summernote" id="long_description" cols="20" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Image:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="file" name="image" class="form-control-file" id="image" accept="image/*" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Blog Status:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label for=""><input type="radio" name="status" value="1" style="cursor: pointer"> Published</label>
                                        <label for=""><input type="radio" name="status" value="0" style="cursor: pointer"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="submit" class="form-control btn-outline-success" value="Add Blog" style="cursor: pointer" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

