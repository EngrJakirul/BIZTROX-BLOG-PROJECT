@extends('admin.master')

@section('title')
    category-section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="card-header text-uppercase text-center text-dark">
                            <h2>Add Category</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('category.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Category Name:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Category Description:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Category Image:-</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="file" name="image" class="form-control-file" id="image" accept="image/*" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label for="">Category Status:-</label>
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
                                        <input type="submit" class="form-control btn-outline-success" value="Add Category" style="cursor: pointer" />
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

