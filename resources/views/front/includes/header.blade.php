
<header class="styles_header__wX5OF styles_home__BOc9q">
    <div class="styles_account_wrap__pom0d">
        <div class="container styles_container__hZYDy">
            <a title="{{get_default_title()}}" class="styles_logo__l0KvO styles_home__BOc9q" href="{{route('site.index')}}">
                <img
                    alt="{{get_default_title()}}"
                    title="{{get_default_title()}}"
                    aria-hidden="true"
                    src="{{get_default_logo()}}"
                    width="100" height="40"
                />
            </a>
            <div class="styles_wrapper_2__YjPsx">
            <a href="{{'tel:'.get_default_phone_number()}}" title="OFFERTE AANVRAGEN" class="button header_button">OFFERTE AANVRAGEN</a>
            </div>
        </div>
    </div>
</header>
<header class="styles_header__P_8O6" style="background-image: url('{{get_default_background()}}')">
    <div class="container">
        <h1 class="h1 m-h3 styles_slogan__FLcMz">
            @if (trim($__env->yieldContent('title')))
                    @yield('title')
            @else
                {{get_default_title()}}
            @endif
        </h1>
        <p class="text-1-regular m-text-4-regular styles_quote__gHMz2">
            @if (trim($__env->yieldContent('seo_description')))
            @yield('seo_description')
            @else
                {{get_default_description()}}
            @endif
        </p>
    </div>
</header>


