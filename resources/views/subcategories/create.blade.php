<?php $page = 'create subcategory'; ?>
@extends('layout.mainlayout')
@section('title', 'Create sub-category')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    @component('components.breadcrumb')
                        @slot('title')
                          Create Sub-category
                        @endslot
                    @endcomponent
                    @component('components.settings-menu')
                    @endcomponent
                    <div class="row">
                        <div class="col-xl-9 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <x-error-messages class="my-custom-class" id="error-container" />
                                    <div class="settings-form">
                                        <form action="{{ route('subcategories.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="settings-sub-header">
                                                <p>To create a subcategory for a size template in Shopify</p>
                                            </div>
                                            @if (session('status'))
                                                <p class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </p>
                                            @endif
                                            <div class="form-wrap">
                                                <div class="profile-upload">
                                                    <div class="profile-upload-img">
                                                        <span><i class="ti ti-photo"></i></span>
                                                        <img id="ImgPreview"
                                                            src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                            alt="img" class="preview1">
                                                        <button type="button" id="removeImage1" class="profile-remove">
                                                            <i class="feather-x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="profile-upload-content">
                                                        <label class="profile-upload-btn">
                                                            <i class="ti ti-file-broken"></i> Upload File
                                                            <input type="file" id="imag" class="input-img"
                                                                name="icon">
                                                        </label>
                                                        <p>JPG, GIF or PNG. Max size of 800K</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-address">
                                                <div class="settings-sub-header">
                                                    <h6></h6>
                                                    <p>All information must be provided</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">
                                                                Name <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" name="name"
                                                                id="validationCustom01" placeholder="Category Name"
                                                                value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">
                                                                Please select Category <span class="text-danger">*</span>
                                                            </label>
                                                            <select class=" form-control" id="category_id"
                                                                name="category_id">
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-button">
                                                <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
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
