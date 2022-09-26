<div class="uk-container uk-container-expand contact-us">
    <div class="uk-container uk-container-large ">
        <div class="uk-section uk-padding-large uk-padding-remove-horizontal">
            <div class="uk-width-1-1">
                <h2 class="uk-heading uk-text-bold -white">Need more information? Contact us!</h2>
            </div>
            <div class="uk-width-1-1  uk-padding-small">
                <div>
                    <div uk-grid>
                        <div class="uk-width-1-3@m">
                            <x-form action="#" id="contact-us">
                                <x-input name="email" class="uk-width-1 uk-padding-small uk-margin-bottom" placeholder="Enter email" />
                                <x-input name="phone" class="uk-width-1 uk-padding-small uk-margin-bottom" placeholder="Enter phone number"/>
                                <x-textarea name="how-can-we-help-you" class="uk-width-1 uk-padding-small uk-margin-bottom" placeholder="How can we help you?"/>
                                <label class="uk-text-small contact-us-agree">
                                    <x-checkbox name="agree"/>
                                    <span class="toggle ">mDevelopers needs the contact information you provide to us to contact you about our products and services.</span>
                                    <button class="uk-button uk-button-text toggle uk-text-bold -white" uk-toggle="target: .toggle" type="button">Read more</button>

                                    <span  hidden class="toggle">mDevelopers needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at anytime. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, check out our Privacy Policy.</span>
                                    <button hidden class="uk-button uk-button-text toggle uk-text-bold -white" uk-toggle="target: .toggle" type="button">Read less</button>
                                </label>
                                <x-form-button :action="route('logout')" class="uk-button uk-button-primary uk-button-small uk-width-1-1 uk-padding-small uk-margin-top uk-button-footer arrow-h">
                                    Get a Free Estimation
                                </x-form-button>
                            </x-form>
                        </div>
                        <div class="uk-width-2-3@m">
                            <div class="uk-child-width-1-3@s uk-grid-match -white uk-text-center " uk-grid>
                                <div>
                                    <div class="uk-card  uk-card-body">
                                        <img  uk-img="loading: eager" class="-invert" src="{{ asset('images/svg/sales-office-chicago-mdevelopers.svg') }}" alt="sales-office-chicago-mdevelopers" width="120px" height="120px">
                                        <h3 class="uk-card-title -white uk-margin-top">Sales Office <span class="uk-text-bolder uk-display-block">Chicago</span></h3>
                                        <p class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a class="uk-button uk-button-default -white uk-border-rounded uk-width-1 phone-footer uk-text-medium" href="#">+1 773 858 2854</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-body">
                                        <img  uk-img="loading: eager" class="-invert" src="{{ asset('images/svg/headquarters-warsaw-mdevelopers.svg') }}" alt="headquarters-warsaw-mdevelopers" width="120px" height="120px">
                                        <h3 class="uk-card-title -white uk-margin-top">Headquaters <span class="uk-text-bolder uk-display-block">Warsaw</span></h3>
                                        <p class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a class="uk-button uk-button-default -white uk-border-rounded uk-width-1 phone-footer uk-text-medium" href="#">+48 502 383 053</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card  uk-card-body">
                                        <img  uk-img="loading: eager" class="-invert" src="{{ asset('images/svg/software-house-czestochowa-mdevelopers.svg') }}" alt="software-house-czestochowa-mdevelopers" width="120px" height="120px">
                                        <h3 class="uk-card-title -white uk-margin-top">Software House <span class="uk-text-bolder uk-display-block">Częstochowa</span></h3>
                                        <p class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a class="uk-button uk-button-default -white uk-border-rounded uk-width-1 phone-footer uk-text-medium" href="#">+48 605 654 329</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
