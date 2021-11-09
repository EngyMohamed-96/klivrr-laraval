@extends('layout.default', [
'title' => trans('dashboard.User Management'),
'parentSection' => 'laravel',
'elementName' => 'user-management'
])
@section('styles')
    <link rel="stylesheet" href=" {{ asset('css/dashboard_style.css') }}">
@endsection
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Details-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">dashboard</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Edit Pages</span>

                    </div>
                    <!--end::Search Form-->

                </div>
                <!--end::Details-->
            </div>
        </div>
        <!--end::Subheader-->
        <div class="d-flex flex-column-fluid flex-column">
            <!--begin::Container edit keys-->
            <div class="container card col-12 my-5">
                <div class="head-dashboard">
                    <h2 class="mt-5">Edit Text</h2>
                    <form method="get">
                        @csrf
                        <select class="form-control" name="edit" onchange=" this.form.submit()">
                            <option class="text-capitalize" value="1" {{ $edit == 1 ? 'selected' : '' }}>Editable</option>
                            <option class="text-capitalize" value="0" {{ $edit == 0 ? 'selected' : '' }}>None-Editable
                            </option>
                        </select>
                        @csrf
                    </form>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" rowspan="2">Key</th>
                            <th scope="col" colspan="2">Content</th>
                            <th>save</th>
                        </tr>
                        <tr>
                            <th>en</th>
                            <th>arabic</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($page_keys as $key)
                            <tr>
                                <form action="{{ route('content.update', ['page' => $key->id]) }}" method="post">
                                    @csrf
                                    <td>
                                        {{ $key->name }}
                                    </td>
                                    <td class="form-group">
                                        <label for="{{ 'en' . $key->id }}">Edit {{ $key->name }} in english</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="{{ 'en' . $key->id }}"
                                                name="value_en"
                                                aria-describedby="emailHelp"
                                                placeholder="Value in English?"
                                                value="{{ $key->value_en }}"
                                        />

                                    </td>
                                    <td class="form-group">
                                        <label for="{{ 'ar' . $key->id }}">Edit {{ $key->name }} in arabic</label>
                                        <input  type="text"
                                                class="form-control"
                                                id="{{ 'ar' . $key->id }}"
                                                name="value_ar" placeholder="Value in Arabic?"
                                                value="{{ $key->value_ar }}"
                                        />
                                    </td>
                                    <td class="">

                                        @if ($edit == 1)
                                            <button type="
                                               submit" class="btn ">
                                                <i class="far fa-edit"></i>
                                            </button>
                                        @endif
                                        @if ($edit == 0)
                                            <button type="
                                                        submit" class="btn btn-success">
                                                Active
                                            </button>

                                        @endif
                                    </td>
                                </form>
                            </tr>
                            <tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <!--begin::Container edit images-->
            <div class="container card col-12">
                <h2 class="mt-5 text-center">Edit Images</h2>
                @if ($images->count() > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> No </th>
                                <th scope="col"> Title </th>
                                <th scope="col">upload</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($images as $image)
                                <tr>
                                    <td scope="row" class="td-img">
                                        <img src="{{ $image->src }}" id="{{ $image->key }}"
                                            alt="{{ $image->key }}">
                                    </td>
                                    <td scope="row">{{ $image->key }}</td>
                                    <form method="POST" enctype="multipart/form-data"
                                        action="{{ route('image.update', ['page' => $image->id]) }}">
                                        {{ csrf_field() }}
                                        <td>

                                            <input type="file" name="image" hidden id="{{ $image->key . 'upload' }}"
                                                onchange="handleImageChange(this,'{{ $image->key }}');">
                                            <label for="{{ $image->key . 'upload' }}">
                                                <i class="fas fa-edit"></i>
                                            </label>

                                        </td>
                                        <td>
                                            <button class="btn btn-primary" type="submit">
                                                Save
                                            </button>
                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                        @else
                            <p scope="row" class="text-center">No Images</p>
                @endif
                </tbody>
                </table>
            </div>
            <!--end::Container-->
        </div>
    </div>
@endsection
<script>
    let handleImageChange = (input, changedImageID) => {

        console.log(event);
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById(changedImageID).setAttribute('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }

    }
</script>
