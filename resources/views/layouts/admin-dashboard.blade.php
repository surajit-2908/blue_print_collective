@php
    $src = Auth::user()->profile_photo ? env('AWS_URL') . Auth::user()->profile_photo : asset('admin/images/no-user-image.png');
    $src_loader = asset('images/loader-animations.gif');
@endphp
<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('includes.header')
    @stack('links')
</head>

<body class="pace-done">
    @include('includes.sidebar')
    <section class="dashboard-body dashboard-shrink">
        <div class="pace pace-inactive">
            <div class="pace-progress" data-progress-text="100%" data-progress="99"
                style="transform: translate3d(100%, 0px, 0px);">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div>
        </div>
        <div class="header-toprow">
            <h1 class="page-title">
                <!-- <button class="formobbuttn" id="nav-toggle">
    <img src="{{ asset('images/toggle.png') }}"/>
   </button> -->
                <div class="formobbuttn">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span></span><span></span><span></span><span></span>
                    </button>
                </div>
                <i class="fa icon-dashboard"></i>
                {{ $dataArr['page_title'] }}
            </h1>
            <div class="header-right-component">
                <ul>
                    <!-- for-web -->
                    <!--<li class="hdr-srch">-->
                    <!--    <form>-->
                    <!--        <i class="fa fa-search"></i>-->
                    <!--        <input type="search" name="" placeholder="Search here...">-->
                    <!--    </form>-->
                    <!--</li>-->
                    <!-- for-mob -->
                    <li class="hdr-srch-mob">
                        <form>
                            <a class="button3">
                                <i class="fa fa-search"></i>
                            </a>
                            <div class="inputsearch content2">
                                <input type="search" name="" placeholder="Search here...">
                            </div>

                        </form>
                    </li>
                    <li class="hdr-user-upload">
                        <!--<span class="user-title">Hello, {{ Auth::guard('admin')->user()->name != '' ? Auth::guard('admin')->user()->name : 'Admin' }}</span>-->
                        <span class="user-title">Hello, Admin</span>
                        <span class="user-pic">
                            <a id="profile-image" class="button2" href="javascript:void(0);">
                                <img src="{{ $src }}" alt="">
                            </a>
                        </span>

                        <div class="profile-setting content1">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" onclick="$('#myModalChangePassword').show();">
                                        <i class="fa fa-pencil"></i> Change Password
                                    </a>
                                </li>
                                <li><a href="{{ route('admin.logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @include('includes.message')
        @include('includes.err-msg')
        @yield('content')

        <!-- ===================== Admin Profile Update Modal Popup Start ===================== -->
        <div class="notification-modal-popup" id="myModalChangePassword">
            <div class="noti-popup-box">
                <button class="noti-close-btn" onclick="$('#myModalChangePassword').hide();">X</button>
                <div class="noti-pop-hdn">
                    <h2>Change Password</h2>
                </div>
                <div class="noti-pop-body">
                    <div class="create-form">
                        <form method="POST" action="{{ route('admin.profile.change_password') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" name="current_password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Password Confirmation</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="category-submit">
                                <ul>
                                    <li>
                                        <button type="button" class="cancel-btn"
                                            onclick="$('#myModalChangePassword').hide();">
                                            Cancel
                                        </button>
                                    </li>
                                    <li>
                                        <button type="submit" class="submit-btn subbtn">Submit</button>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== Admin Profile Update Modal Popup End ===================== -->

        <footer class="btm-main-footer">
            <div class="footer-row">
                <!-- <div class="footer-contact-details">
                <ul>
                    <li><i class="fa fa-phone"></i>01223 750331</li>

                </ul>
            </div> -->
                <div class="copyright-txt">
                    @include('includes.footer-text')
                </div>
            </div>
        </footer>
    </section>
    @include('includes.footer')
    @stack('script')
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.multi-delete-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'This record and related data will be deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
        $('.delete-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'This record will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });

        $('.status-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'Do you really want to change this status!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
    </script>

</body>

</html>
