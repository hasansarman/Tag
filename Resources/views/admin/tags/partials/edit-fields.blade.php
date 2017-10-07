<div class="box-body">
    {!! Form::i18nInput('NAME', 'Name', $errors, $lang, $tag, ['data-slug' => 'source']) !!}
    {!! Form::i18nInput('SLUG', 'Slug', $errors, $lang, $tag, ['data-slug' => 'target']) !!}
</div>
<label>Oluşturulma Tarihi: <label id="idate">{{$tag->IDATE}}</label></label>
<br/>
<label>Son Güncelleme: <label id="udate">{{$tag->UDATE}}</label></label>
<br/>
