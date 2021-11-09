@extends('translation::layout', [
    'title' => trans('dashboard.Item Management'),
    'parentSection' => 'simulations',
    'elementName' => 'language'
])

@section('body')
    @php
        use Illuminate\Support\Facades\Config;$languages = Config::get('constants.languages');
    @endphp
    <div class="panel">

        <div class="panel-header">

            {{ trans('translation::translation.add_language') }}

        </div>

        <form action="{{ route('languages.store') }}" method="POST">

            <fieldset>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="panel-body p-4">


                    @include('translation::forms.text', ['field' => 'language name', 'label' => trans
                    ('translation::translation.language_name'), ])

                    @include('translation::forms.select', ['name' => 'locale', 'items' => $languages, 'label' => trans
                    ('translation::translation.language_name'), 'classes' => 'w-100 unset-max-w'])

                    {{--                    @include('translation::forms.select', ['field' => 'locale', 'label' => trans--}}
                    {{--                    ('translation::translation.locale'), ])--}}

                </div>

            </fieldset>

            <div class="panel-footer flex flex-row-reverse">

                <button class="button button-blue">
                    {{ trans('translation::translation.save') }}
                </button>

            </div>

        </form>

    </div>

@endsection
