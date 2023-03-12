@extends('admin.master')

@section('title')
    edit-category-page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="card-header text-uppercase text-center text-dark">
                            <h2>Edit Category</h2>
                        </div>
                        <div class="card-body bg-light">
                            <form action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Category Name:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="name" value="{{$category->name}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Category Description:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{!! $category->description !!}</textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Category Image:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="file" name="image" class="form-control-file" id="image" accept="image/*">
                                        <img src="{{asset($category->image)}}" alt="" height="100" width="100">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Category Status:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label for=""><input type="radio" name="status" value="1" {{$category->status == 1 ? 'checked' : ''}} style="cursor: pointer" /> Published</label>
                                        <label for=""><input type="radio" name="status" value="0" {{$category->status == 0 ? 'checked' : ''}} style="cursor: pointer" /> Unpublished</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="submit" class="form-control btn-outline-success" value="Update Category" style="cursor: pointer" />
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

