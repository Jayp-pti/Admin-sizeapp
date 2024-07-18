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
                            @if (Route::is('size_charts.edit'))
                                Edit Size
                            @else
                                Create size
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
                                            action="{{ Route::is('size_charts.edit') ? Route('size_charts.update', $size_chart->id) : Route('size_charts.store') }}"
                                            method="POST" id="size-chart-form" enctype="multipart/form-data">
                                            @csrf

                                            @if (Route::is('size_charts.edit'))
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
                                                                @php
                                                                    $output = Route::is('size_charts.edit')
                                                                        ? ($size_chart->icon
                                                                            ? ''
                                                                            : '<span><i class="ti ti-photo"></i></span>')
                                                                        : '<span><i class="ti ti-photo"></i></span>';
                                                                @endphp
                                                                {!! $output !!}
                                                                <img id="ImgPreview"
                                                                    src="{{ Route::is('size_charts.edit') ? asset('storage/' . ($size_chart->image ? $size_chart->image : URL::asset('/build/img/profiles/avatar-02.jpg'))) : URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                                    alt="img"
                                                                    class="preview1  {{ Route::is('size_charts.edit') ? ($size_chart->image ? 'it' : '') : '' }}">
                                                                <button type="button" id="removeImage1"
                                                                    class="profile-remove">
                                                                    <i class="feather-x"></i>
                                                                </button>
                                                            </div>
                                                            <div class="profile-upload-content">
                                                                <label class="profile-upload-btn">
                                                                    <i class="ti ti-file-broken"></i> Upload File
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
                                                        <div class="profile-upload">
                                                            <div class="profile-upload-img">
                                                                {!! $output !!}
                                                                <img id="ImgPreview"
                                                                    src="{{ Route::is('size_charts.edit') ? asset('storage/' . ($size_chart->icon ? $size_chart->icon : URL::asset('/build/img/profiles/avatar-02.jpg'))) : URL::asset('/build/img/profiles/avatar-02.jpg') }}"
                                                                    alt="img"
                                                                    class="preview1 images2 {{ Route::is('size_charts.edit') ? ($size_chart->image ? 'it' : '') : '' }}">
                                                                <button type="button" id="removeIcon1"
                                                                    class="profile-remove">
                                                                    <i class="feather-x"></i>
                                                                </button>
                                                            </div>
                                                            <div class="profile-upload-content">
                                                                <label class="profile-upload-btn">
                                                                    <i class="ti ti-file-broken"></i> Upload Icon
                                                                    <input type="file" id="icon" class="input-img"
                                                                        name="icon" data-imgpreview="images2">
                                                                </label>
                                                                <p>JPG, GIF or PNG. Max size of 800K</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <p class="card-text"><b>Note: </b> Image position is optional; by
                                                            default, it will be set to
                                                            bottom. You can change it by selecting a different position.</p>
                                                        <select class=" form-control" id="image_position"
                                                            name="image_position">
                                                            <option value="bottom"
                                                                {{ Route::is('size_charts.edit') ? ($size_chart->image_position == 'bottom' ? 'selected' : '') : '' }}>
                                                                Bottom</option>
                                                            <option value="top"
                                                                {{ Route::is('size_charts.edit') ? ($size_chart->image_position == 'top' ? 'selected' : '') : '' }}>
                                                                Top</option>
                                                            <option value="left"
                                                                {{ Route::is('size_charts.edit') ? ($size_chart->image_position == 'left' ? 'selected' : '') : '' }}>
                                                                Left</option>
                                                            <option value="right"
                                                                {{ Route::is('size_charts.edit') ? ($size_chart->image_position == 'right' ? 'selected' : '') : '' }}>
                                                                Right</option>
                                                        </select>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="profile-address">
                                                <div class="settings-sub-header">
                                                    <h6></h6>
                                                    <p>All information must be provided</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">
                                                                Name <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" name="name"
                                                                id="validationCustom01" placeholder="Template Name"
                                                                value="{{ Route::is('size_charts.edit') ? $size_chart->name : '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">
                                                                Please select Category <span class="text-danger">*</span>
                                                            </label>
                                                            <select class=" form-control" id="category_id"
                                                                name="category_id">
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}"
                                                                        {{ Route::is('size_charts.edit') ? ($size_chart->category_id == $category->id ? 'selected' : '') : '' }}>
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <i class="ion-plus-circled" data-bs-toggle="tooltip"
                                                                    aria-label="ion-plus-circled"
                                                                    data-bs-original-title="ion-plus-circled"></i>
                                                                <div class="btn-list">
                                                                    <button type="button" class="btn btn-soft-light"
                                                                        onclick="addColumn()">
                                                                        <i class="fa fa-plus-circle"
                                                                            aria-hidden="true"></i>
                                                                        Column</button>
                                                                    <button type="button" class="btn btn-soft-light"
                                                                        onclick="addRow()">
                                                                        <i class="fa fa-plus-circle"
                                                                            aria-hidden="true"></i>
                                                                        Row</button>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered mb-0"
                                                                        id="size-chart">
                                                                        <thead>
                                                                            <tr>
                                                                                @if (Route::is('size_charts.edit'))
                                                                                    @if ($size_chart->field_value !== null)
                                                                                        @php
                                                                                            $field_values = json_decode(
                                                                                                $size_chart->field_value,
                                                                                                true,
                                                                                            );
                                                                                        @endphp

                                                                                        @foreach (json_decode($field_values, true) as $data)
                                                                                            @foreach ($data as $key => $value)
                                                                                                <th contenteditable="true">
                                                                                                    {{ $key }}
                                                                                                </th>
                                                                                            @endforeach
                                                                                        @break
                                                                                    @endforeach
                                                                                @else
                                                                                    <th contenteditable="true"></th>
                                                                                @endif
                                                                            @else
                                                                                <th contenteditable="true"></th>

                                                                            @endif
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if (Route::is('size_charts.edit'))
                                                                            @foreach (json_decode($field_values, true) as $data)
                                                                                <tr>
                                                                                    @foreach ($data as $key => $value)
                                                                                        <{{ $loop->iteration == 1 ? 'th' : 'td' }}
                                                                                            contenteditable="true">
                                                                                            {{ $value }}
                                                                                            </{{ $loop->iteration == 1 ? 'th' : 'td' }}>
                                                                                    @endforeach
                                                                                </tr>
                                                                            @endforeach

                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="col-form-label col-md-2">Description</label>
                                                    <div class="col-md-12">

                                                        <x-forms.tinymce-editor name="description"
                                                            content="{{ Route::is('size_charts.edit') ? $size_chart->description : 'Hello, World!' }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-button">
                                            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
                                            <button type="submit" class="btn btn-primary">
                                                @if (Route::is('size_charts.edit'))
                                                    Save Changes
                                                @else
                                                    Create
                                                @endif
                                            </button>
                                        </div>


                                    </form>

                                    <div id="context-menu" class="context-menu">
                                        <ul>
                                            <li onclick="insertRowAbove()">Insert row above</li>
                                            <li onclick="insertRowBelow()">Insert row below</li>
                                            <li onclick="insertColumnRight()">Insert column right</li>
                                            <li onclick="insertColumnLeft()">Insert column left</li>
                                            <li onclick="deleteRow()">Delete row</li>
                                            <li onclick="deleteColumn()">Delete column</li>
                                        </ul>
                                    </div>
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
