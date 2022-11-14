@extends('layouts.layout')
@section('content')
    <!--========================= Contact Section =========================-->

    <div class="contactMain">
        <div class="container">
            <div class="dflex">
                <div class="dlcol">
                    <h3>Get in touch </br><strong>with us</strong></h3>
                    <p>You may reach us directly via using the contact details provided below.
                        Alternatively, you may complete the form below and someone from our team
                        will contact you shortly.</p>
                    <form class="formGroup">
                        <div class="dflex mb20">
                            <div class="w45">
                                <input type="text" name="" class="formControl" placeholder="First name">
                            </div>
                            <div class="w45">
                                <input type="text" name="" class="formControl" placeholder="Last name">
                            </div>
                        </div>

                        <div class="dflex mb20">
                            <div class="w45">
                                <input type="text" name="" class="formControl" placeholder="Email address">
                            </div>
                            <div class="w45">
                                <input type="text" name="" class="formControl" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="dflex mb20">
                            <textarea class="formControl hit120" placeholder="Tell us about your sales inquiry..."></textarea>
                        </div>
                        <div class="dflex">
                            <input type="submit" name="" class="sendBtn" value="Send request">
                        </div>

                    </form>
                </div>
                <div class="drcol">
                    <h3>Don't hesitate to contact us
                        for any information. </h3>

                    <div class="webSec">
                        <h4>Website</h4>
                        <p>www.myblueprintcollective.com</p>
                    </div>
                    <div class="emailSec">
                        <h4>Email</h4>
                        <p>info@myblueprintcollective.com</p>
                    </div>
                    <div class="phoneSec">
                        <h4>Phone</h4>
                        <p>7182887616</p>
                    </div>
                    <div class="addressSec">
                        <h4>Address</h4>
                        <p>10 Bank Street Suite 560</br>
                            White Plains, NY 10606</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
@stop
