<div class="row seo--page">
    <div class="small-12 large-7 columns">
        {!! Form::model($seo,['url'=>'/backend/seo/'.$seo->id,'method'=>'put']) !!}
        <div class="seo--input-wrapper">
            {!! Form::label('title',Lang::get('laravel4-seo::seo.title')) !!}
            {!! Form::text('title') !!}
            <p class="seo--characters"><span class="seo--characters-used">0</span> / <span class="seo--characters-max">60</span></p>
        </div>
        <div class="seo--input-wrapper">
            {!! Form::label('description',Lang::get('laravel4-seo::seo.description')) !!}
            {!! Form::textarea('description') !!}
            <p class="seo--characters"><span class="seo--characters-used">0</span> / <span class="seo--characters-max">160</span></p>
        </div>
        <h2>Vorschau</h2>

        <div class="seo--preview-container">
            <div class="seo--gtitle" data-fallback="{{ Lang::get('laravel4-seo::seo.title') }}"></div>
            <div class="seo--gurl">
                {!! Lang::get('laravel4-seo::seo.baseurl') !!}
            </div>
            <div class="seo--gdescription" data-fallback="{{ Lang::get('laravel4-seo::seo.description') }}">
            </div>
        </div>
        <input type="submit" class="button" value="{{ Lang::get('laravel4-seo::seo.save') }}">
        {!! Form::close() !!}
        
        
    </div>
    <div class="small-12 large-5 columns">
        <h2>{!! Lang::get('laravel4-seo::seo.tipperfecttitle') !!}</h2>
        <p>
            {!! Lang::get('laravel4-seo::seo.titleinfo') !!}
        </p>
        <div class="panel">
            {!! Lang::get('laravel4-seo::seo.titleformat') !!}
        </div>
        <p>
            {!! Lang::get('laravel4-seo::seo.titleexample') !!}
        </p>
        
        <h2>{!! Lang::get('laravel4-seo::seo.tipperfectdescription') !!}</h2>
        <p>
            {!! Lang::get('laravel4-seo::seo.descriptioninfo') !!}
        </p>
    </div>
</div>