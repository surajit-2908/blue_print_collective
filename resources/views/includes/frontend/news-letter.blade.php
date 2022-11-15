<!--========================= News Letter Section =========================-->

<section class="newsLetterSec">
    <div class="container">
        <div class="newsLetterContentArea">
            <div class="dFlx spaceBet alignCenter">
                <div class="newsLetterLeftTextArea">
                    <h2>Entrepreneurship, A to Z</h2>

                    <p>
                        We’re committed to providing best-in-class education to student
                        founders and investors everywhere. Sign up for our newsletter to
                        stay up to date on our latest posts, resources, tools,
                        giveaways, and events!
                    </p>

                    <form id="footer-form" action="javascript:void(0)">
                        <input type="email" name="email" id="footer-email" class="newsLetterTextField"
                            placeholder="Enter your email" />

                        <input type="submit" id="submit-footer-form" class="newsLetterSubscribeBtn"
                            value="Subscribe" />
                        <input type="button" id="footer-form-loader" class="newsLetterSubscribeBtn d-none"
                            value="Subscribing..." />
                        <span class="text-danger d-none" id="footer-email-err">Please provide a valid email
                            address</span>
                        <span class="text-success d-none" id="footer-email-suc">Successfully added to our mailing
                            list</span>
                    </form>

                    <p class="privacyText">
                        By signing up for our newsletters you give consent to our
                        <a href="#">Privacy Policy</a>
                    </p>
                </div>

                <div class="newsLetterRightImg">
                    @if (Route::is('service'))
                        <img src="{{ asset('assets/images/service-img5.png') }}" alt="" />
                    @else
                        <img src="{{ asset('assets/images/news-letter-pic.png') }}" alt="" />
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
