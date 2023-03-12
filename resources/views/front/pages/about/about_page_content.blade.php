    {{-- Begin First section --}}
    <div id="tiepost-131-section-1777" class="section-wrapper container-full without-background">
        <div class="section-item is-first-section full-width">
            <div class="container">
                <div class="mag-box-title the-global-title section-name">
                    <h3>{{get_company_name()}}</h3>
                </div>
                <div class="tie-row main-content-row">
                    <div class="main-content tie-col-md-12">
                        {!!Str::limit(get_default_about_page_content(), 1500) !!}
                    </div>
                    <a href="{{ URL::route('about.index')}}" class="block-pagination next-posts show-more-button load-more-button" data-text=" عرض المزيد">عرض المزيد</a>
                </div>
            </div>
        </div>
    </div>
