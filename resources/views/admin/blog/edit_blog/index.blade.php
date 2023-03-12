@extends('admin.master')

@section('title')
    Edit Blog Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="card-header text-uppercase text-center text-dark">
                            <h2>Edit Blog Form</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('blog.update', ['id' => $blog->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Blog Category Name:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control" name="category_id" id="category_id" required>
                                            <option value="" disabled selected>------Select Blog Category Name------</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$blog->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Blog Title</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="main_title" value="{{$blog->main_title}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Blog  Sub Title</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="sub_title" value="{{$blog->sub_title}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Short Description:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="short_description" class="form-control summernote" id="short_description" cols="20" rows="5">{!! $blog->short_description !!}</textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Long Description:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="long_description" class="form-control summernote" id="long_description" cols="20" rows="5">{!! $blog->long_description !!}</textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Image:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="file" name="image" class="form-control-file" id="image" accept="image/*" />
                                        <img src="{{asset($blog->image)}}" alt="" width="100" height="100" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Blog Status:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label for=""><input type="radio" name="status" value="1" {{$blog->status == 1 ? 'checked' : ''}} style="cursor: pointer"> Published</label>
                                        <label for=""><input type="radio" name="status" value="0" {{$blog->status == 0 ? 'checked' : ''}} style="cursor: pointer"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="submit" class="form-control btn-outline-success" value="Update Blog" style="cursor: pointer" />
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

