<?php $page = 'create size'; ?>
@extends('layout.mainlayout')
@section('title', 'Create size')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    @component('components.breadcrumb')
                        @slot('title')
                            @if (Route::is('icons.edit'))
                                Edit Icon
                            @else
                                Upload Icon
                            @endif
                        @endslot
                    @endcomponent

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <x-error-messages class="my-custom-class" id="error-container" />
                                    <div class="settings-form">
                                        <form
                                            action="{{ Route::is('icons.edit') ? Route('icons.update', $size_chart->id) : Route('size_charts.store') }}"
                                            method="POST" id="upload_icons" enctype="multipart/form-data">
                                            @csrf

                                            @if (Route::is('icons.edit'))
                                                @method('PUT')
                                            @endif
                                            <input type="hidden" id="size-chart-data" name="field_value">
                                            <div class="settings-sub-header">
                                                <p>To create a subcategory for a size template in Shopify</p>
                                            </div>
                                            @if (session('status'))
                                                <p class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </p>
                                            @endif
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <div class="profile-upload">
                                                            <div class="profile-upload-img">
                                                                <span><i class="ti ti-photo"></i></span>
                                                                <img id="ImgPreview"
                                                                    src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                                    alt="img" class="preview1">
                                                                <button type="button" id="removeImage1"
                                                                    class="profile-remove">
                                                                    <i class="feather-x"></i>
                                                                </button>
                                                            </div>
                                                            <div class="profile-upload-content">
                                                                <label class="profile-upload-btn">
                                                                    <i class="ti ti-file-broken"></i> Upload Icon
                                                                    <input type="file" id="imag" class="input-img"
                                                                        name="image" data-imgpreview="preview1">
                                                                </label>
                                                                <p>JPG, GIF or PNG. Max size of 800K</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">
                                                            Name <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="name"
                                                            id="validationCustom01" placeholder="Template Name"
                                                            value="">
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                    <div class="submit-button">
                                        <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
                                        <button type="submit" class="btn btn-primary">
                                            @if (Route::is('icons.edit'))
                                                Save Changes
                                            @else
                                                Upload
                                            @endif
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
