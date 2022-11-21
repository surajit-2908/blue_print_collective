@extends('layouts.layout')
@section('content')
    <!--========================= Contact Section =========================-->

    <div class="contactMain">
        @include('includes.frontend.message')
        @include('includes.err-msg')
        <div class="container">
            <div class="dflex">
                <div class="dlcol">
                    {{-- <h3>Get in touch </br><strong>with us</strong></h3>
                    <p>You may reach us directly via using the contact details provided below.
                        Alternatively, you may complete the form below and someone from our team
                        will contact you shortly.</p> --}}
                        {!! $contentArr['top'] !!}
                    <form action="{{ route('save.contact') }}" class="formGroup" method="post" id="myform">
                        @csrf
                        <div class="dflex mb20">
                            <div class="w45">
                                <input type="text" name="fname" class="formControl" placeholder="First name">
                            </div>
                            <div class="w45 mob20">
                                <input type="text" name="lname" class="formControl" placeholder="Last name">
                            </div>
                        </div>

                        <div class="dflex mb20">
                            <div class="w45">
                                <input type="email" name="email" class="formControl" placeholder="Email address">
                            </div>
                            <div class="w45 mob20">
                                <input type="text" name="phone" class="formControl" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="dflex mb20">
                            <textarea name="msg" class="formControl hit120" placeholder="Tell us about your sales inquiry..."></textarea>
                        </div>
                        <div class="dflex">
                            <input type="submit" class="sendBtn" value="Send request">
                        </div>

                    </form>
                </div>
                <div class="drcol">
                    <h3>Don't hesitate to contact us
                        for any information. </h3>

                    <div class="webSec">
                        <h4>Website</h4>
                        <p>{{ $setting->contact_website }}</p>
                    </div>
                    <div class="emailSec">
                        <h4>Email</h4>
                        <p>{{ $setting->contact_email }}</p>
                    </div>
                    <div class="phoneSec">
                        <h4>Phone</h4>
                        <p>{{ $setting->contact_phone }}</p>
                    </div>
                    <div class="addressSec">
                        <h4>Address</h4>
                        <p>{{ $setting->contact_address }}</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')
    <script>
        $("#myform").validate({
            rules: {
                fname: {
                    required: true,
                },
                lname: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 11
                },
                msg: {
                    required: true,
                },
            },
            messages: {
                fname: "Please enter first name",
                lname: "Please enter last name",
                email: "Please enter a valid email address",
                phone: {
                    required: "Please enter your phone number",
                    number: "Please enter a valid phone number",
                    minlength: "Please enter a valid phone number",
                    maxlength: "Please enter a valid phone number",
                },
                msg: "Please enter description",
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
@endpush
