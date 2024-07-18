<?php $page = 'templates'; ?>
@extends('layout.mainlayout')
@section('title', 'templates')
@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    @component('components.breadcrumb')
                        @slot('title')
                            Templates
                        @endslot
                    @endcomponent
                    <div class="row">
                        @foreach ($categories as $category)
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">{{ $category->name }}</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gy-4">
                                            @forelse ($category->sizeCharts as $sizechart)
                                                <div class="col-xl-2" id="template_{{ $sizechart->id }}">
                                                    <div class="form-floating mb-4 floating-primary">
                                                        <div class="card text-center">
                                                            <div class="card-body template_view">
                                                                <div class="mb-2">
                                                                    <span class="avatar avatar-md">
                                                                        <img src="{{ asset('storage/' . ($sizechart->icon ? $sizechart->icon : 'icons/favicon.png')) }}"
                                                                            alt="{{ $sizechart->name }}">
                                                                    </span>
                                                                </div>
                                                                <a href="{{ route('size_charts.edit', $sizechart->id) }}"
                                                                    class="btn btn-primary">
                                                                    {{ $sizechart->name }}</a>
                                                                <a href="#" data-bs-toggle="dropdown"
                                                                    class="list_dropdown" aria-expanded="false"
                                                                    class="">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </a>
                                                                @component('components.action-items', [
                                                                    'data' => [
                                                                        'tempid' => $sizechart->id,
                                                                        'link' => route('size_charts.edit', $sizechart->id),
                                                                        'view_templates' => 'view_templates',
                                                                        'delete_templates' => 'delete_templates',
                                                                        'target' => 'view-template',
                                                                        'delete_target' => 'DeleteTemplate',
                                                                    ],
                                                                ])
                                                                @endcomponent
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <p class="card-text text-center">Data items is not available</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @component('components.model-popup')
        @endcomponent
    @endsection
