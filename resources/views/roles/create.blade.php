@extends('layout.default', [
    'title' => trans('dashboard.User Management'),
    'parentSection' => 'Manage Roles',
    'elementName' => 'create-role'
])
@section('styles')
    <link href="{{asset('')}}css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
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
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{ __('dashboard.new role') }}</h5>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Search Form-->
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">{{ __('dashboard.enter_role_details') }}</span>
                    </div>
                    <!--end::Search Form-->
                </div>
                <!--end::Details-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Button-->
                    <a href="{{ route('roles.index') }}" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">{{__('dashboard.back')}}</a>
                    <!--end::Button-->
                    <!--begin::Dropdown-->
                    <div class="btn-group ml-2">
                        <button type="submit" form="kt_form" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base">{{__('dashboard.submit')}}</button>
{{--                        <button type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>--}}
{{--                        <div class="dropdown-menu dropdown-menu-sm p-0 m-0 dropdown-menu-right">--}}
{{--                            <ul class="navi py-5">--}}
{{--                                <li class="navi-item">--}}
{{--                                    <a href="#" class="navi-link">--}}
{{--														<span class="navi-icon">--}}
{{--															<i class="flaticon2-writing"></i>--}}
{{--														</span>--}}
{{--                                        <span class="navi-text">Save &amp; continue</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="navi-item">--}}
{{--                                    <a href="#" class="navi-link">--}}
{{--														<span class="navi-icon">--}}
{{--															<i class="flaticon2-medical-records"></i>--}}
{{--														</span>--}}
{{--                                        <span class="navi-text">Save &amp; add new</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="navi-item">--}}
{{--                                    <a href="#" class="navi-link">--}}
{{--														<span class="navi-icon">--}}
{{--															<i class="flaticon2-hourglass-1"></i>--}}
{{--														</span>--}}
{{--                                        <span class="navi-text">Save &amp; exit</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Toolbar-->
            </div>
{{--        </div>--}}
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom card-transparent">
                    <div class="card-body p-0">
                        <!--begin::Wizard-->
                        <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
                            <!--begin::Wizard Nav-->
                            <div class="wizard-nav">
                                <div class="wizard-steps">
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-number">1</div>
                                            <div class="wizard-label">
                                                <div class="wizard-title">{{__ ('dashboard.manage_roles')}}</div>
                                                <div class="wizard-desc">{{__('dashboard.new role')}}</div>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="wizard-step" data-wizard-type="step">--}}
{{--                                        <div class="wizard-wrapper">--}}
{{--                                            <div class="wizard-number">2</div>--}}
{{--                                            <div class="wizard-label">--}}
{{--                                                <div class="wizard-title">Account</div>--}}
{{--                                                <div class="wizard-desc">User's Account &amp; Settings</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="wizard-step" data-wizard-type="step">--}}
{{--                                        <div class="wizard-wrapper">--}}
{{--                                            <div class="wizard-number">3</div>--}}
{{--                                            <div class="wizard-label">--}}
{{--                                                <div class="wizard-title">Address</div>--}}
{{--                                                <div class="wizard-desc">User's Shipping Address</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="wizard-step" data-wizard-type="step">--}}
{{--                                        <div class="wizard-wrapper">--}}
{{--                                            <div class="wizard-number">4</div>--}}
{{--                                            <div class="wizard-label">--}}
{{--                                                <div class="wizard-title">Submission</div>--}}
{{--                                                <div class="wizard-desc">Review and Submit</div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Nav-->
                            <!--begin::Card-->
                            <div class="card card-custom card-shadowless rounded-top-0">
                                <!--begin::Body-->
                                <div class="card-body p-0">
                                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                        <div class="col-xl-12 col-xxl-10">
                                            <!--begin::Wizard Form-->
                                            <form method="post" action="{{ route('roles.store') }}" autocomplete="off" id="kt_form">
                                                @csrf
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-9">
                                                        <!--begin::Wizard Step 1-->
                                                        <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                                                            <h5 class="text-dark font-weight-bold mb-10">{{__('dashboard.role_information')}}</h5>
                                                            <!--begin::Group-->
{{--                                                            <div class="form-group row">--}}
{{--                                                                <label class="col-xl-3 col-lg-3 col-form-label text-left">Avatar</label>--}}
{{--                                                                <div class="col-lg-9 col-xl-9">--}}
{{--                                                                    <div class="image-input image-input-outline" id="kt_user_add_avatar">--}}
{{--                                                                        <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_6.jpg)"></div>--}}
{{--                                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">--}}
{{--                                                                            <i class="fa fa-pen icon-sm text-muted"></i>--}}
{{--                                                                            <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />--}}
{{--                                                                            <input type="hidden" name="profile_avatar_remove" />--}}
{{--                                                                        </label>--}}
{{--                                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">--}}
{{--																							<i class="ki ki-bold-close icon-xs text-muted"></i>--}}
{{--																						</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{__('dashboard.Name')}}</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control form-control-solid form-control-lg" name="name" type="text" value="{{ old('name') }}" />
                                                                </div>
                                                            </div>
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{__('dashboard.Description')}}</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <textarea class="form-control form-control-solid form-control-lg {{ $errors->has('description') ? ' is-invalid' : '' }} " name="description" type="text" cols="30" rows="10"  placeholder="{{ __('dashboard.Description') }}"  value="{{ old('description') }}" ></textarea>
{{--                                                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('dashboard.Description') }}" value="{{ old('description') }}"></textarea>--}}

                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">{{__('dashboard.permissions')}}</label>
{{--                                                                    <label>{{ __('dashboard.permissions') }}</label>--}}
                                                                <div class="col-lg-9 col-xl-9">

                                                                <select name="permissions[]" class="form-control form-control-solid form-control-lg"  data-toggle="select" >
                                                                    @foreach($permissions as $permission)
                                                                    <option  >
                                                                        {{$permission->name}}
                                                                    </option>
                                                                    @endforeach


                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                                    <!--end::Group-->
{{--                                                            <!--begin::Group-->--}}
{{--                                                            <div class="form-group row">--}}
{{--                                                                <label class="col-xl-3 col-lg-3 col-form-label">Company Name</label>--}}
{{--                                                                <div class="col-lg-9 col-xl-9">--}}
{{--                                                                    <input class="form-control form-control-solid form-control-lg" name="companyname" type="text" value="Loop Inc." />--}}
{{--                                                                    <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <!--end::Group-->--}}
{{--                                                            <!--begin::Group-->--}}
{{--                                                            <div class="form-group row">--}}
{{--                                                                <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>--}}
{{--                                                                <div class="col-lg-9 col-xl-9">--}}
{{--                                                                    <div class="input-group input-group-solid input-group-lg">--}}
{{--                                                                        <div class="input-group-prepend">--}}
{{--																							<span class="input-group-text">--}}
{{--																								<i class="la la-phone"></i>--}}
{{--																							</span>--}}
{{--                                                                        </div>--}}
{{--                                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="phone" value="5678967456" placeholder="Phone" />--}}
{{--                                                                    </div>--}}
{{--                                                                    <span class="form-text text-muted">Enter valid US phone number(e.g: 5678967456).</span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <!--end::Group-->--}}
                                                            <!--begin::Group-->
{{--                                                            <div class="form-group row">--}}
{{--                                                                <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>--}}
{{--                                                                <div class="col-lg-9 col-xl-9">--}}
{{--                                                                    <div class="input-group input-group-solid input-group-lg">--}}
{{--                                                                        <div class="input-group-prepend">--}}
{{--																							<span class="input-group-text">--}}
{{--																								<i class="la la-at"></i>--}}
{{--																							</span>--}}
{{--                                                                        </div>--}}
{{--                                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="email" value="" />--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                            <!--end::Group-->
                                                            <!--begin::Group-->
{{--                                                            <div class="form-group row">--}}
{{--                                                                <label class="col-xl-3 col-lg-3 col-form-label">Company Site</label>--}}
{{--                                                                <div class="col-lg-9 col-xl-9">--}}
{{--                                                                    <div class="input-group input-group-solid input-group-lg">--}}
{{--                                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="companywebsite" placeholder="Username" value="loop" />--}}
{{--                                                                        <div class="input-group-append">--}}
{{--                                                                            <span class="input-group-text">.com</span>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                            <!--end::Group-->
                                                        </div>
                                                        <!--end::Wizard Step 1-->
                                                        <!--begin::Wizard Step 2-->
                                                        <!--begin::Wizard Step 3-->
                                                        <!--begin::Wizard Step 4-->
                                                        <!--begin::Wizard Actions-->
                                                        <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                                            <div class="mr-2">
{{--                                                                <button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">Previous</button>--}}
                                                            </div>
                                                            <div>
                                                                <button type="button" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Submit</button>
{{--                                                                <button type="button" id="next-step" class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">Next</button>--}}
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Actions-->
                                                    </div>
                                                </div>
                                            </form>
                                            <!--end::Wizard Form-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Wizard-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
{{--        </div>--}}
        <!--end::Entry-->
{{--    </div>--}}
    <!--end::Content-->


@endsection

@section('scripts')
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('') }}js/pages/custom/user/add-user.js"></script>
@endsection
