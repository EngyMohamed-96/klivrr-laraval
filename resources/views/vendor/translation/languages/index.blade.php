@extends('translation::layout', [
    'title' => trans('dashboard.User Management'),
    'parentSection' => 'manage-translation',
    'elementName' => 'manage-translation'
])

@section('body')

    @if(count($languages))

        <div class="panel">

            <div class="panel-header">

                {{ __('translation::translation.languages') }}

                <div class="flex flex-grow justify-end items-center">

                    <a href="{{ route('languages.create') }}" class="button">
                        {{ __('translation::translation.add') }}
                    </a>

                </div>

            </div>

            <div class="panel-body">

                <table>

                    <thead>
                        <tr>
                            <th>{{ __('translation::translation.language_name') }}</th>
                            <th>{{ __('translation::translation.locale') }}</th>
                            <th>{{trans('dashboard.Actions')}}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($languages as $language => $name)
                            <tr>
                                <td>
                                    {{ config('constants.languages')[$name] }}
                                </td>
                                <td>
                                    <a href="{{ route('languages.translations.index', $language) }}">
                                        {{ $language }}
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('language.delete', $name) }}" method="post">
                                        @csrf
                                        @method('post')
                                        <button type="button" class="dropdown-item danger" onclick="confirm('{{ __("Are you sure you want to delete this language?") }}') ? this.parentElement.submit() : ''">
                                            {{ trans('dashboard.Delete') }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    @endif

@endsection
