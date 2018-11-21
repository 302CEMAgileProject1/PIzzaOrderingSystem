@extends('user.layouts.master')

@section('title', 'FAQ')

@section('sectionHeader', 'Frequently Asked Questions')

@section('sectionHeaderSentence', 'Frequently Asked Questions by Users')

@section('content')
    <div class="accordion" id="accordionFAQ">
        <div class="card">
            {{--One--}}
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        1. How to contact Penang Pizza admin when I have some suggestion and advice?
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                <div class="card-body">
                    To gives us some feedback, kindly click on the ‘Feedback’ page to include your concern on related topic. Any recommendation and suggestions are welcome.
                </div>
            </div>
        </div>

        {{--Two--}}
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2. I have problem updating my personal information.
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                <div class="card-body">
                    Please call our hotline at +60147467610 so we can further assist you.
                </div>
            </div>
        </div>

        {{--Three--}}
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        3. I forgot my password. How do I reset?
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                <div class="card-body">
                    To reset your password, click on Login then Forgot Password.<br>
                    Enter your registered email address.<br>
                    We will send the Password Reset link to your email. Once you click on the link given, it will bring you to the page where you can reset your password.
                </div>
            </div>
        </div>

        {{--Four--}}
        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        4. I cannot find my previous order history.
                    </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
                <div class="card-body">
                    To find Order History, click on ‘My Profile’. From there, there is an ‘Order History’ tab. Kindly contact us at +60147467610 and we can also assist you in checking your order history
                </div>
            </div>
        </div>

        {{--Five--}}
        <div class="card">
            <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        5. Can I confirm if Penang Pizza has received my online order?
                    </button>
                </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFAQ">
                <div class="card-body">
                    You can track your orders online once it has gone through.
                </div>
            </div>
        </div>

        {{--Six--}}
        <div class="card">
            <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        6. I have just moved and would like to change my address, how do I do this?
                    </button>
                </h5>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionFAQ">
                <div class="card-body">
                    To change your address, login and click on ‘My Profile’. <br>
                    Under the “My Address” tab, you can edit or update your address details.
                </div>
            </div>
        </div>

        {{--Seven--}}
        <div class="card">
            <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        7. How can I pay by credit card?
                    </button>
                </h5>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionFAQ">
                <div class="card-body">
                    Since our Penang Pizza Ordering website is new and we will only accept money from our customers after they receive their orders. So, it will only be ‘Cash on Delivery’ service.
                </div>
            </div>
        </div>

        {{--Eight--}}
        <div class="card">
            <div class="card-header" id="headingEight">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        8. I can’t find any help in FAQ section, what should I do?
                    </button>
                </h5>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionFAQ">
                <div class="card-body">
                    Kindly contact our hotline at +60147467610 or send us your concern through Feedback section. We prioritize your happiness and satisfaction on our service.
                </div>
            </div>
        </div>
    </div>
@endsection