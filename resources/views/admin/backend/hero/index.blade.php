@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Hero Section</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Sub Title</label>
                                <div class="col-sm-9">
                                <textarea class="form-control" rows="4" id="comment" style="height: 131px;"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Button Text</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Button Text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Button URL</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Button URL">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Background Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" placeholder="Button URL">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection