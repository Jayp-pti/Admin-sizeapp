<?php $page = 'categories'; ?>
@extends('layout.mainlayout')
@section('title', 'Categories')
@section('content')

    <div class="page-wrapper">
        <div class="content">

            <div class="row">
                <div class="col-md-12">

                    @component('components.breadcrumb')
                        @slot('title')
                            categories
                        @endslot
                    @endcomponent

                    <div class="card main-card">
                        <div class="card-body">
                            @if (session('status'))
                                <p class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </p>
                            @endif
                            <div class="search-section">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4">
                                        <div class="form-wrap icon-form">
                                            <span class="form-icon"><i class="ti ti-search"></i></span>
                                            <input type="text" class="form-control" placeholder="Search Contacts">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-8">
                                        <div class="export-list text-sm-end">
                                            <ul>
                                                <li>
                                                    <div class="export-dropdwon">
                                                        <a href="javascript:void(0);" class="dropdown-toggle"
                                                            data-bs-toggle="dropdown"><i
                                                                class="ti ti-package-export"></i>Export</a>
                                                        <div class="dropdown-menu  dropdown-menu-end">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);"><i
                                                                            class="ti ti-file-type-pdf text-danger"></i>Export
                                                                        as PDF</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);"><i
                                                                            class="ti ti-file-type-xls text-green"></i>Export
                                                                        as Excel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="{{ url('categories/create') }}"
                                                        class="btn btn-primary add-popup"><i
                                                            class="ti ti-square-rounded-plus"></i>Create Category</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Search -->



                            <!-- Contact List -->
                            <div class="table-responsive custom-table">
                                <table class="table" id="categorieslist">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="no-sort">
                                                <label class="checkboxs"><input type="checkbox" id="select-all"><span
                                                        class="checkmarks"></span></label>
                                            </th>

                                            <th>Name</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="datatable-length"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="datatable-paginate"></div>
                                </div>
                            </div>
                            <!-- /Contact List -->

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
