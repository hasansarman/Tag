<div class="box-body">
    {!! Form::i18nInput('NAME', trans('tag::tags.name'), $errors, $lang, null, ['data-slug' => 'source']) !!}
    {!! Form::i18nInput('SLUG', trans('tag::tags.slug'), $errors, $lang, null, ['data-slug' => 'target']) !!}
</div>
