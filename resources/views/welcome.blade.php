@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex rounded border p-5 p-lg-15 pb-lg-12">
        <!--begin::Items-->
        <div class="d-flex flex-wrap flex-center justify-content-lg-between mx-auto w-xl-900px">
            <!--begin::Item-->
            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bg-light rounded-circle">
                <!--begin::Symbol-->
                <i class="ki-duotone ki-arrow-down-refraction fs-4x text-primary mb-3">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <!--end::Symbol-->
                <!--begin::Info-->
                <div class="mb-0">
                    <!--begin::Value-->
                    <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex flex-center">
                        <div class="min-w-70px counted" data-kt-countup="true" data-kt-countup-value="{{ $inTransactionTotal }}" data-kt-countup-suffix="K+" data-kt-initialized="1">
                            {{ $inTransactionTotal }}€
                        </div>
                    </div>
                    <!--end::Value-->
                    <!--begin::Label-->
                    <span class="text-gray-600 fw-semibold fs-5 lh-0">
                        In
                    </span>
                    <!--end::Label-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bg-light rounded-circle">
                <!--begin::Symbol-->
                <i class="ki-duotone ki-arrow-up-refraction fs-4x text-primary mb-3">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <!--begin::Info-->
                <div class="mb-0">
                    <!--begin::Value-->
                    <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex flex-center">
                        <div class="min-w-70px counted" data-kt-countup="true" data-kt-countup-value="{{ $outTransactionTotal }}" data-kt-countup-suffix="K+" data-kt-initialized="1">
                            {{ $outTransactionTotal }}€
                        </div>
                    </div>
                    <!--end::Value-->

                    <!--begin::Label-->
                    <span class="text-gray-600 fw-semibold fs-5 lh-0">
                        Out
                    </span>
                    <!--end::Label-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bg-light rounded-circle">
                <!--begin::Symbol-->
                <i class="ki-duotone ki-bank fs-4x text-primary mb-3">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <!--begin::Info-->
                <div class="mb-0">
                    <!--begin::Value-->
                    <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex flex-center">
                        <div class="min-w-70px counted" data-kt-countup="true" data-kt-countup-value="{{ $differenceInOutTransaction }}" data-kt-countup-suffix="M+" data-kt-initialized="1">
                            {{ $differenceInOutTransaction }}€
                        </div>
                    </div>
                    <!--end::Value-->

                    <!--begin::Label-->
                    <span class="text-gray-600 fw-semibold fs-5 lh-0">
                        Result
                    </span>
                    <!--end::Label-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Item-->
        </div>
        <!--end::Items-->
    </div>
@endsection
