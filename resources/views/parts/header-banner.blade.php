<div class="uk-container uk-container-expand header-gradient {{ $bannerBackground }} uk-padding-remove">
    <div class="uk-section uk-padding-large uk-padding-remove-hozrizontal uk-padding-remove-vertical uk-grid-small">
        <div class="uk-container uk-container-large uk-flex uk-flex-middle">
            <div class="uk-flex ukflex-middle uk-margin-remove uk-position-relative">
                <div class="uk-card uk-card-body uk-margin-left uk-width-3-5@m uk-padding-large uk-padding-remove-horizontal">
                    @if ($textFirst && $textSecond)
                        @if ($textTop)
                    <span class="uk-text-large uk-padding-remove extra-text">We're <strong>mDevelopers</strong></span></br>
                        @endif
                    <h1 class="uk-heading uk-heading-medium uk-text-bold">
                        <span><mark>{{$textFirst}}</mark> {{$textSecond}}</span></h1>
                    @endif
                    <div class="header-buttons uk-flex uk-margin-small-top">
                        <a href="{{$buttonHref}}"><button aria-label="Button" class="uk-button uk-button-primary uk-button-large uk-text-medium uk-margin-right uk-margin-top transform-right">{{$buttonText}}</button></a>
                        @if ($clutchWidget)
                        <div class="clutch-widget uk-margin-top -whitebg" data-url="https://widget.clutch.co" data-widget-type="2" data-height="45" data-nofollow="true" data-expandifr="true" data-scale="100" data-clutchcompany-id="571782"></div>
                        @endif
                    </div>
                </div>
                <div class="uk-card uk-card-body uk-margin-left uk-padding-remove uk-visible@m image-header"><img uk-img="loading: eager" src="{{ asset($imageHref) }}" alt="Extend your team or build whole software project from scratch with us!" width="100%" height="100%"></div>
            </div>
        </div>
    </div>
</div>
