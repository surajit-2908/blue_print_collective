@extends('layouts.admin-dashboard')
@section('content')
    <div class="admin-body-area">
        <!-- Booking Status Section Start -->
        <div class="booking-status-sec content-list-sec">
            <div class="category-list-hdn">
                <h2 style="text-transform: capitalize;">About Tag Management</h2>
                <h3 class="create-cat">
                    <a href="{{ route('admin.about.tag.add') }}"><i class="fa fa-plus"></i> Add New About Tag</a>
                </h3>
            </div>


            <div class="about-tag-list-area" id="showFilter">

                <!-- User List Area -->
                <div class="datatable table1">
                    <table class="table" id="bootstrap-data-table">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dataArr['aboutTagArr'] as $aboutTag)
                                <tr>
                                    <td title="Icon">
                                        <img src="{{ asset('storage/tags_image/') . '/' . $aboutTag->image }}"
                                            alt="" class="bnr-img">
                                    </td>
                                    <td title="Title">
                                        {{ $aboutTag->title }}
                                    </td>
                                    <td title="Action">
                                        <a href="{{ route('admin.about.tag.edit', $aboutTag->id) }}" title="Edit">
                                            <i class="fa fa-edit listing"></i>
                                        </a>
                                        <a href="{{ route('admin.about.tag.remove', $aboutTag->id) }}" title="Delete"
                                            class="delete-confirm">
                                            <i class="fa fa-trash chat"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- Booking Status Section Start -->
@stop
