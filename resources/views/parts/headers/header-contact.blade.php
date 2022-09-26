<div class="uk-container uk-container-expand blue-bar blue-bar-contact uk-padding-large uk-padding-remove-horizontal">
    <div class="uk-container uk-container-large">
        <div class="uk-section uk-padding-small uk-flex">
            <div class="uk-width-1-2@m">
                <h1 class="uk-heading uk-heading-medium uk-text-bold uk-mainpage-header">
                    <span><mark>Custom software development services</mark> suited to your needs</span>
                </h1>
            </div>
            <div class="uk-width-1-2@m uk-visible@m">
                <div class="uk-width-1-1@l uk-padding-large uk-padding-remove-top">
                    <x-form action="#" id="contact-us" class="uk-card-default uk-padding-small free-consultation-form">
                        <x-input name="name" class="uk-width-1 uk-padding-small uk-margin-bottom"
                                 placeholder="Full name"/>
                        <x-input name="email" class="uk-width-1 uk-padding-small uk-margin-bottom"
                                 placeholder="Enter email"/>
                        <x-input name="phone" class="uk-width-1 uk-padding-small uk-margin-bottom"
                                 placeholder="Enter phone number"/>
                        <x-textarea name="how-can-we-help-you" class="uk-width-1 uk-padding-small uk-margin-bottom"
                                    placeholder="How can we help you?"/>
                        <label class="uk-text-small">
                            <x-checkbox name="agree"/>
                            <span class="toggle ">mDevelopers needs the contact information you provide to us to contact you about our products and services.</span>
                            <button class="uk-button uk-button-text toggle uk-text-bold" uk-toggle="target: .toggle" type="button">Read more</button>

                            <span  hidden class="toggle">mDevelopers needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at anytime. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, check out our Privacy Policy.</span>
                            <button hidden class="uk-button uk-button-text toggle uk-text-bold" uk-toggle="target: .toggle" type="button">Read less</button>
                        </label>
                        <x-form-button :action="route('logout')"
                                       class="uk-button uk-button-primary uk-button-small uk-width-1-1 uk-padding-small uk-margin-top uk-text-large transform-right">
                            Send
                        </x-form-button>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-container uk-container-large">
    <div class="uk-section  uk-padding-remove-horizontal uk-flex">
        <div class="uk-width-1-2@m">
            <p>If you are looking for a trusted partner, you've come to the right place! Our team comprises over 50
                specialists who will be happy to help you create your custom software, application, or platform. We have
                over 12 years of experience in custom software development, and our rating on Clutch is 5/5.</p>
        </div>

    </div>
</div>

