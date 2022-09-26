<div class="uk-container uk-container-expand blue-bar">
    <div class="uk-container uk-container-large">
        <div class="uk-section  uk-padding-remove-horizontal -place-center" uk-grid>
            <div class="uk-width-1-2@m -white">
                <h2 class="uk-heading uk-heading-small uk-text-bold -white">
                    @if($highlightTitle)<mark class="mark-blue-bar">{{ $highlightTitle }}</mark>@endif{{ $mainTitle }}</h2> @if($mainContent) <hr> <p>{{ $mainContent }}</p> @endif
                @if ($button)
                    <a href="#" class="uk-display-block"><button aria-label="Button" class="uk-button uk-button-primary uk-button-large uk-text-medium transform-right">See more</button></a>
                @endif
            </div>
            <div class="uk-width-1-2@m uk-visible@m">
                <div>
                    <img alt="Image description" uk-img="loading: eager" class="blue-bar-header-img uk-align-right" src='{{ asset($imageHref) }}'>
                </div>
            </div>
        </div>
    </div>
</div>
