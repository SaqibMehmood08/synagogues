@extends('admin.layout.main')

@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                <div class="row mt-10">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 h-50">
                        <!--begin::Card widget 20-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end" style="background-color: #293038; background-image: url('../assets/media/svg/shapes/widget-bg-1.png')">
                            <!--begin::Header-->
                            <div class="card-header pb-15 pt-3">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $managers ? $managers : 0 }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white pt-1 fw-semibold fs-6">{{__('Total Managers')}}</span>
                                    <!--end::Subtitle-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                     <!--begin::Col-->
                    <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 h-50">
                        <!--begin::Card widget 20-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end" style="background-color: #293038; background-image: url('../assets/media/svg/shapes/widget-bg-1.png')">
                            <!--begin::Header-->
                            <div class="card-header pb-15 pt-3">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $synagogues ? $synagogues : 0 }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white pt-1 fw-semibold fs-6">{{__('Total Synagogues Registered')}}</span>
                                    <!--end::Subtitle-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 h-50">
                        <!--begin::Card widget 20-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end" style="background-color: #293038; background-image: url('../assets/media/svg/shapes/widget-bg-1.png')">
                            <!--begin::Header-->
                            <div class="card-header pb-15 pt-3">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $lessons ? $lessons : 0 }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white pt-1 fw-semibold fs-6">{{__('Total Torah Lessons')}}</span>
                                    <!--end::Subtitle-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                  <!--begin::Row-->
                <div class="row mt-10">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 h-50">
                        <!--begin::Card widget 20-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end" style="background-color: #293038; background-image: url('../assets/media/svg/shapes/widget-bg-1.png')">
                            <!--begin::Header-->
                            <div class="card-header pb-15 pt-3">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $videos ? $videos : 0 }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white pt-1 fw-semibold fs-6">{{__('Total Videos')}}</span>
                                    <!--end::Subtitle-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->
                     <!--begin::Col-->
                    <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3 h-50">
                        <!--begin::Card widget 20-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end" style="background-color: #293038; background-image: url('../assets/media/svg/shapes/widget-bg-1.png')">
                            <!--begin::Header-->
                            <div class="card-header pb-15 pt-3">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $version->version ? $version->version :0 }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white pt-1 fw-semibold fs-6">{{__('Current App Version')}}</span>
                                    <!--end::Subtitle-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Col-->

                </div>
                <!--end::Row-->


            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end::Main-->
@php
    $hideFooter = true;
@endphp
@endsection
