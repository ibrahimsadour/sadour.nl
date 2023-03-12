<style>

    div.form {
      background-color: #eee;
    }
    .contact-submit-btn {
      float: left;
    }
    .reset-btn {
      float: right;
    }
    
    .form-input:focus,
    textarea:focus{
      outline: 1.5px solid #ec1c24;
    }
    .form-input,
    textarea {
      width: 100%;
      border: 1px solid #bdbdbd !important;
      border-radius: 5px;
    }
    form {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 20px;
    }
    form label {
      display: block;
    }
    form p {
      margin: 0;
    }
    
    .full-width {
      grid-column: 1 / 3;
    }
    button,
    .submit-btn,
    .form-input,
    textarea {
      padding: 1em;
    }
    .contact-submit-btn{
        margin-right: 10px;
    }
    </style>

<div id="tie-block_1160" class="mag-box big-post-top-box has-first-big-post box-dark-skin dark-skin has-custom-color" data-current="1">
    <div class="container-wrapper">
        <div class="mag-box-title the-global-title">
            <h3>Blog</h3>
        </div>
        <div class="mag-box-container clearfix">
            <ul class="posts-items posts-list-container">
                <?php $count = 0; ?>
                @isset($first_articles)
                    @foreach($first_articles as $article)
                    <?php if($count == 1) break; ?>
                        <li class="post-item tie-thumb">
                            <a
                                aaria-label="{{$article ->name}}" href="{{ url($article ->slug) }}" title="{{$article ->name}}"
                                class="post-thumb"
                            >
                                <span class="post-cat-wrap"><span class="post-cat tie-cat-8">{{$article ->service->name}}</span></span>
                                <img
                                    width="390"
                                    height="220"
                                    src="{{$article ->photo}}"
                                    class="attachment-jannah-image-large size-jannah-image-large lazy-img wp-post-image"
                                    alt="{{$article ->name}}"
                                    title="{{$article ->name}}"
                                    decoding="async"
                                    loading="lazy"
                                />
                            </a>
                            <div class="post-details">
                                <div class="post-meta clearfix">
                                    <span class="date meta-item tie-icon">{{$article -> created_at->diffForHumans()}}</span>
                                </div>
                                <h2 class="post-title">
                                    <a
                                        href="{{url($article ->slug)}}" title="{{$article ->name}}"
                                    >
                                    {{ Str::limit($article -> name, 45) }}
                                    </a>
                                </h2>
                                <p class="post-excerpt">{{ Str::limit($article -> seo_description, 150 ) }}</p>
                                <a
                                    class="more-link button"
                                    href="{{url($article ->slug)}}" title="{{$article ->name}}"
                                >
                                    أكمل القراءة »
                                </a>
                            </div>
                        </li>
                    <?php $count++; ?>
                    @endforeach
                @endisset
                <?php $count = 0; ?>
                @isset($last_articles)
                    @foreach($last_articles as $article)
                    <?php if($count == 4) break; ?>
                    <li class="post-item tie-standard middle-article">
                        <a
                        aaria-label="{{$article ->name}}" href="{{url($article ->slug)}}" title="{{$article ->name}}"
                            class="post-thumb"
                        >
                            <img
                                width="220"
                                height="150"
                                src="{{$article ->photo}}"
                                class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image"
                                alt="{{$article ->name}}"
                                title="{{$article ->name}}"
                                decoding="async"
                                loading="lazy"
                            />
                        </a>
                        <div class="post-details">
                            <div class="post-meta clearfix"><span class="date meta-item tie-icon">{{$article -> created_at->diffForHumans()}}</span></div>
                            <h2 class="post-title">
                                <a
                                    href="{{url($article ->slug)}}" title="{{$article ->name}}"
                                >
                                {{ Str::limit($article -> name, 45) }}
                                </a>
                            </h2>
                        </div>
                    </li>
                    <a href="{{ URL::route('articles.index')}}" class="block-pagination next-posts show-more-button load-more-button" data-text="تحميل المزيد">تحميل المزيد</a>
                    <?php $count++; ?>
                    @endforeach
                @endisset
            </ul>
            <div class="clearfix"></div>
        </div>
        
    </div>
        {{--Content of the article--}}
            <h2 style="color:black;">Vraag nu een offerte aan</h2>
            <p style="color:black;">Staat er binnenkort een verhuizing op de planning en wil je ons verhuisbedrijf graag isnchakelen? Neem dan meteen telefonisch of per email contact met ons op. Onze specialisten leggen je de verschillende mogelijkheden graag uit en luisteren aandacht naar jouw behoeften. Indien gewenst kunnen we ook bij je thuis langskomen om alle details nauwkeurig te bespreken. We stellen ook meteen een vrijblijvende offerte op. Ons voorstel past binnen het beschikbare budget en voldoet aan al jouw wensen en eisen. Op deze manier weet je meteen waar je aan toe bent en kan je een juiste en weloverwogen beslissing nemen.</p>
            <br>
            <div class="form">
            <form id="submit-form" action="">
                <p>
                <input id="name" class="form-input" type="text" placeholder="الإسم*">
                <small class="name-error"></small>
                </p>
                <p>
                <input id="email" class="form-input" type="email" placeholder="البريد الإلكتروني*">
                <small class="name-error"></small>
                </p>
                <p class="full-width">
                <input id="company-name" class="form-input" type="text" placeholder="رقم الواتساب *" required>
                <small></small>
                </p>
                <p class="full-width">
                <textarea  minlength="20" id="message" cols="30" rows="7" placeholder="رسالتك *" required></textarea>
                <small></small>
                </p>
                <p class="full-width">
                <button class="button"> send</button>
                <button class="button" onclick="reset()">reset</button>
                </p>
            </form>
        </div>
</div>
