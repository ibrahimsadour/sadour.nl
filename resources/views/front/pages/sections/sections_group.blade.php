{{-- Begin section --}}
<style>

.row {
  display: inline-block;    
}

.columns {
  width: 19%;
  vertical-align: top;/*Fix for different     height elements*/
  display: inline-block;
  color: #fff;
  padding: 4px;
 }
.align-right {
  text-align: right;
}
@media screen and (max-width: 680px) {
  .columns {
    width: 24%;
  }
  .mag-box .post-title{
    font-size: 13px;
  }
}
    </style>

<div id="tie-s_1441" class="mag-box big-posts-box has-custom-color" data-current="1">
    <div class="container">
        <div class="mag-box-title the-global-title section-name">
            <h3>Diensten</h3>
        </div>
        <div class="row">
                @isset($sections)
                @foreach($sections as $section)
                <div class="columns">
                    <a href="{{url('sections/'.$section -> slug)}}" title="{{ $section -> name}}"><img src="{{ $section -> photo}}"  alt="{{ $section -> name}}" title="{{ $section -> name}}" height="300" width="300" class="box-shadow"
                        alt="{{ $section -> name}}" decoding="async" loading="lazy"/>
                    </a>
                    <div class="post-details">
                        <h5 class="post-title section-title"><a href="{{url('sections/'.$section -> slug)}}" title="{{ $section -> name}}">{{ $section -> name}}</a></h5>
                    </div>
                </div>

                @endforeach
            @endisset
        </div>
    </div>
</div>
