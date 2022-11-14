<!--========================= Footer Section =========================-->

<footer class="mainFooter">
    <div class="container">
        <div class="ftrLogo">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-black.png') }}" alt="" /></a>

            <h3>Stay in Touch</h3>

            <p>Follow us to <a href="javascript:void(0)">#ReThinkHighSchool</a></p>
        </div>

        <div class="ftrMenu">
            <ul>
                <li><a href="javascript:void(0)">PRIVACY POLICY</a></li>

                <li><a href="javascript:void(0)">TERMS</a></li>

                <li><a href="{{ route('contact') }}">CONTACT</a></li>

                <li><a href="{{ route('service') }}">SERVICES</a></li>

                <li><a href="{{ route('about') }}">ABOUT</a></li>
            </ul>
        </div>

        <p class="ftrMailId">support@blueprintcollective.org</p>

        <p class="ftrCopyright">
            &copy; {{ date('Y') }} - Blueprint Collective. All rights reserved.
        </p>
    </div>
</footer>
