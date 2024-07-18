<?php $page = 'dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <div class="row">
                <div class="col-md-12">

                    @component('components.breadcrumb')
                        @slot('title')
                            Dashboard
                        @endslot
                        @slot('item1')
                            dashboard
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
                        <div class="col-md-5 d-flex">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="statistic-header">
                                        <h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
                                        <div class="dropdown statistic-dropdown">
                                            <div class="card-select">
                                                <ul>
                                                    <li>
                                                        <a class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            href="javascript:void(0);">
                                                            Last 30 Days
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                Last 30 Days
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                Last 15 Days
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                Last 7 Days
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="leadpiechart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="statistic-header">
                                        <h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
                                        <div class="dropdown statistic-dropdown">
                                            <div class="card-select">
                                                <ul>
                                                    <li>
                                                        <a class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            href="javascript:void(0);">
                                                            Sales Pipeline
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">

                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                Marketing Pipeline
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                Sales Pipeline
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            href="javascript:void(0);">
                                                            Last 3 months
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">

                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                Last 3 months
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                Last 6 months
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                Last 12 months
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="contact-report"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
    @component('components.model-popup')
    @endcomponent
@endsection
