<?php $page = 'charticons'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    @component('components.breadcrumb')
                        @slot('title')
                            Icons
                        @endslot
                        @slot('item1')
                            Icons
                        @endslot
                    @endcomponent

                    <div class="row">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="statistic-header">
                                        <h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Leads</h4>
                                        <div class="dropdown statistic-dropdown">
                                            <div class="card-select">
                                                <ul>
                                                    <li>
                                                        <a class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            href="javascript:void(0);">
                                                            <i class="ti ti-calendar-check me-2"></i>Last 30 days
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                Last 15 days
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                Last 30 days
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive custom-table">
                                        <table class="table dataTable" id="lead-project">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Lead Name</th>
                                                    <th>Company Name</th>
                                                    <th>Phone</th>
                                                    <th>Lead Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
