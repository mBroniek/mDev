<div class="uk-container uk-container-expand background-default get-answers uk-margin-large-bottom ">
    <div class="uk-container uk-container-large">
        <div class="uk-section uk-padding-large uk-padding-remove-horizontal uk-padding-remove-bottom benefits-inside"  uk-grid>
            <div class="uk-width-1-1@m">
                <h2 class="uk-heading uk-text-bold">Get answers to tough questions</h2>
                @if ($extraText)
                    <p>{{ $extraText }}</p>
                @endif
            </div>
            <div class="uk-flex">
                <div class="uk-width-1-3 uk-padding-small uk-padding-remove-bottom uk-visible@m  {{$order1}}">
                    <img alt="Image description" uk-img="loading: eager" src='{{ asset($imageHref) }}' alt="The benefits of choosing Switch Fast">
                </div>
                <div class="uk-width-2-3@m uk-padding-small uk-padding-remove-horizontal {{$order2}}">
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m benefits-list" uk-grid="masonry: true">
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-start" style="height: 100px">The current product is reviewed, and we propose ideas for its improvement
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-start" style="height: 130px">You don't pay the full hourly rate until the third week of cooperation
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-start" style="height: 110px">The whole process takes from 10 to 20 days (including the test sprint)
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-start" style="height: 100px">Every aspect of the project is discussed and approved
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-start" style="height: 150px">This service creates foundations on which the successful end product will be build
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-flex uk-flex-start" style="height: 100px">You don't have to deal with an unprofessional company</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
