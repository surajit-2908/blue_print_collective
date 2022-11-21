@extends('layouts.admin-dashboard')
@section('content')
    <div class="admin-body-area">
        <!-- Booking Status Section Start -->
        <div class="booking-status-sec content-list-sec">
            <div class="category-list-hdn">
                <h2 style="text-transform: capitalize;">Edit About Tag</h2>
                <h3 class="create-cat">
                    <a href="{{ route('admin.about.tag') }}">Back</a>
                </h3>
            </div>


            <div class="about-tag-list-area">
                <form action="{{ route('admin.about.tag.update', $dataArr['aboutTagArr']->id) }}" method="POST"
                    id="about_tag_form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ $dataArr['aboutTagArr']->title }}" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6"></div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Icon <small class="text-danger">*Icon size must be less than 2MB</small></label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="gallery-photo-add" name="image"
                                        onchange="readURL(this);">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 show-img">
                            <img id="showImg"
                                src="{{ asset('storage/tags_image/') . '/' . $dataArr['aboutTagArr']->image }}"
                                style="height100px; width:100px;">
                        </div>
                    </div>

                    <button class="subbtn" type="submit">Submit</button>
                </form>

            </div>
        </div>

    </div>
    <!-- Booking Status Section Start -->
@stop
