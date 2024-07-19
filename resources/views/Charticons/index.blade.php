<?php $page = 'Chart icons'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    @component('components.breadcrumb')
                        @slot('title')
                            Guide Icons
                        @endslot
                        @slot('item2')
                            Guide Icons
                        @endslot
                    @endcomponent
                    @component('components.settings-menu')
                    @endcomponent
                    <div class="row">
                        <div class="col-xl-3 col-lg-12 theiaStickySidebar">
                            <div class="card">
                                <div class="card-body">
                                    <div class="settings-sidebar">
                                        <h4>General Settings</h4>
                                        <ul>
                                            <li>
                                                <a href="{{ route('profile.show') }}">Profile</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('icons.index') }}" class="active">Connected Apps</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-12">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="settings-header">
                                        <h4>Connected Icons</h4>
                                    </div>
                                    <div class="row">
                                        @foreach ($Charticons as $icon)
                                            <div class="col-md-4 col-sm-6">
                                                <div class="integration-grid" style="min-height: 130px">
                                                    <div class="integration-calendar">
                                                        <img src="{{ asset('storage/' . ($icon->icon ? $icon->icon : URL::asset('/build/img/profiles/avatar-02.jpg'))) }}"
                                                            alt="Icon">
                                                        <div class="connect-btn">
                                                            <a href="javascript:void(0);" id="status-{{ $icon->id }}"
                                                                class=" {{ $icon->status == 1 ? 'connected' : '' }} ">
                                                                {{ $icon->status == 1 ? 'Active' : 'Draft' }} </a>
                                                        </div>
                                                    </div>
                                                    <div class="integration-content">
                                                        <p>{{ ucfirst($icon->name) }}</p>
                                                        <div class="status-toggle">
                                                            <input id="google_calendar_{{ $icon->id }}"
                                                                class="check status_update" data-id="{{ $icon->id }}"
                                                                type="checkbox" {{ $icon->status == 1 ? 'checked' : '' }}>
                                                            <label for="google_calendar_{{ $icon->id }}"
                                                                class="checktoggle">checkbox</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
