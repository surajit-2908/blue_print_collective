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

                    <form>
                        <input type="text" name="" class="newsLetterTextField" placeholder="Enter your email" />

                        <input type="submit" name="" class="newsLetterSubscribeBtn" value="Subscribe" />
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
