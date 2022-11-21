@extends('layouts.admin-dashboard')
@section('content')
    <div class="admin-body-area">
        <!-- Booking Status Section Start -->
        <div class="booking-status-sec content-list-sec">
            <div class="category-list-hdn">
                <h2 style="text-transform: capitalize;">Edit {{ $dataArr['contentArr']->page }} Page Content</h2>
                <h3 class="create-cat">
                    <a href="{{ route('admin.content.listing', $dataArr['contentArr']->page) }}">Back</a>
                </h3>
            </div>
            {{ @$message }}
            <div class="content-list-area">
                <form action="{{ route('admin.content.update', $dataArr['contentArr']->id) }}" method="POST" id="content_form"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" value="{{ $dataArr['contentArr']->position }}" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" id="content" class="form-control" required>{!! $dataArr['contentArr']->content !!}</textarea>
                        </div>
                        <button class="submit-btn subbtn" type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    </div>
    <!-- Booking Status Section Start -->
@stop

@push('scripts')
    <script type="text/javascript">
        function readURLSec(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#showImg2')
                        .attr('src', e.target.result);
                };
                $('.show-img2').show();

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
