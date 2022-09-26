<div class="uk-container uk-container-expand free-consultation-header">
    <div class="uk-container uk-container-large ">
        <div class="uk-section uk-padding-large uk-padding-remove-horizontal uk-padding-remove-bottom">
            <div class="uk-width-1-1 uk-text-center uk-margin-small-bottom">
                <h1 class="uk-heading uk-heading-medium uk-text-bold uk-mainpage-header">
                    <span><mark>Get in touch</mark> witch us!</span></h1>
                <div class="-white uk-padding-small uk-width-1-2@m uk-margin-auto">Fill out the contact form below, and we will contact you within one business day. We are eager to become part of your success.</div>
            </div>
            <div class="uk-width-1-1  uk-padding-small uk-padding-remove-bottom">
                <div>
                    <div class="uk-flex">
                        <div class="uk-width-1-3@l uk-visible@l">
                            <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-1@s -white" uk-grid>
                                <img alt="Free consultation man calling" uk-img="loading: eager" src="{{ asset('images/headers-pages/man-calling.webp') }}">
                            </div>
                        </div>
                        <div class="uk-width-2-3@l uk-padding-large uk-padding-remove-top uk-padding-remove-bottom free-consultation-form">
                            <x-form action="#" id="contact-us" class="uk-card-default uk-padding-small free-consultation-form">
                                <x-input name="name" class="uk-width-1 uk-padding-small uk-margin-bottom" placeholder="Full name" />
                                <x-input name="email" class="uk-width-1 uk-padding-small uk-margin-bottom" placeholder="Enter email" />
                                <x-input name="phone" class="uk-width-1 uk-padding-small uk-margin-bottom" placeholder="Enter phone number"/>
                                <x-textarea name="how-can-we-help-you" class="uk-width-1 uk-padding-small uk-margin-bottom" placeholder="How can we help you?"/>
                                <label class="uk-text-small">
                                    <x-checkbox name="agree"/>
                                    <span class="toggle ">mDevelopers needs the contact information you provide to us to contact you about our products and services.</span>
                                    <button class="uk-button uk-button-text toggle uk-text-bold" uk-toggle="target: .toggle" type="button">Read more</button>

                                    <span  hidden class="toggle">mDevelopers needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at anytime. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, check out our Privacy Policy.</span>
                                    <button hidden class="uk-button uk-button-text toggle uk-text-bold" uk-toggle="target: .toggle" type="button">Read less</button>
                                </label>
                                <x-form-button :action="route('logout')" class="uk-button uk-button-primary uk-button-small uk-width-1-1 uk-padding-small uk-margin-top uk-text-large transform-right">
                                    Send
                                </x-form-button>
                            </x-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
