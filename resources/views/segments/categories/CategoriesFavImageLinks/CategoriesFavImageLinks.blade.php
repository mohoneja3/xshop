<section id='CategoriesFavImageLinks'>

    <div class="{{gfx()['container']}}">
        <h1>
            {{getSetting($data->area->name.'_'.$data->part.'_title')}}
        </h1>
        <div id="brands-slider">
            @foreach( getCategorySubCatsBySetting($data->area->name.'_'.$data->part.'_category',8) as $category )
                <div class="item">
                    <a href="{{$category->webUrl()}}">
                        <img src="{{$category->imgUrl()}}" alt="{{$category->name}}" title="{{$category->title}}">
                    </a>
                </div>
            @endforeach
        </div>
        <div id="brand-nav-container">

        </div>
    </div>

</section>
