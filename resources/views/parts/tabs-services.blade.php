<div class="uk-container uk-container-expand uk-box-shadow-small  uk-background-default">
    <div class="uk-container uk-container-large uk-margin-bottom">
        <ul class="uk-subnav uk-child-width-expand@s uk-text-left  uk-position-relative uk-flex uk-flex-middle uk-padding-large uk-padding-remove-bottom uk-padding-remove-horizontal"
            uk-switcher="animation: uk-animation-slide-top-medium, uk-animation-slide-top-medium">
            <li class="uk-grid-match">
                <a href="#">
                    <div class="uk-card uk-card-default uk-card-body  uk-team  uk-nav-expand  uk-services">
                        <h2 class="uk-card-title uk-text-bold uk-margin-remove uk-serviceHeader"><span>Team</span> </br> <span>Extension</span></h2>
                    </div>
                </a>
            </li>
            <li class="uk-grid-match">
                <a href="#">
                    <div class="uk-card uk-card-default uk-card-body uk-mobile uk-nav-expand uk-services">
                        <h2 class="uk-card-title uk-text-bold uk-margin-remove uk-serviceHeader"><span>Mobile</span> </br><span>Development</span></h2>
                    </div>
                </a>
            </li>
            <li class="uk-grid-match">
                <a href="#">

                        <div class="uk-card uk-card-default uk-card-body uk-web uk-nav-expand  uk-services">
                            <h2 class="uk-card-title uk-text-bold uk-margin-remove uk-serviceHeader"><span>Web</span> </br><span>Development</span></h2>
                        </div>
                </a>
            </li>
            <li class="uk-grid-match">
                <a href="#">
                    <div class="uk-card uk-card-default uk-card-body uk-uxui uk-nav-expand  uk-services">
                        <h2 class="uk-card-title uk-text-bold uk-margin-remove uk-serviceHeader"><span>UI/UX </span></br> <span>Design</span></h2>
                    </div>
                </a>
            </li>
            <li class="uk-grid-match">
                <a href="#">
                    <div class="uk-card uk-card-default uk-card-body uk-discovery uk-nav-expand  uk-services">
                        <h2 class="uk-card-title uk-text-bold uk-margin-remove uk-serviceHeader"><span>Discovery</span> </br> <span>Workshop</span></h2>
                    </div>
                </a>
            </li>
            <li class="uk-grid-match">
                <a href="#">
                    <div class="uk-card uk-card-default uk-card-body uk-ai uk-nav-expand  uk-services">
                        <h2 class="uk-card-title uk-text-bold uk-margin-remove uk-serviceHeader"><span>AI</span> </br> <span>Development</span></h2>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="uk-switcher uk-margin">
            <li class="uk-flex uk-flex-wrap">
                    @include('parts.one-stop-shop.team-extension')
            </li>
            <li class="uk-flex uk-flex-wrap">
                    @include('parts.one-stop-shop.mobile-app')
            </li>
            <li class="uk-flex uk-flex-wrap">
                @include('parts.one-stop-shop.web-app')
            </li>
            <li class="uk-flex uk-flex-wrap">
                @include('parts.one-stop-shop.uxui')
            </li>
            <li class="uk-flex uk-flex-wrap">
                @include('parts.one-stop-shop.discovery')
            </li>
            <li class="uk-flex uk-flex-wrap">
                @include('parts.one-stop-shop.ai')
            </li>
        </ul>
    </div>
</div>
