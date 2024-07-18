<?php $page = 'create-category'; ?>
@extends('layout.mainlayout')
@section('title', 'Create Category')
@section('content')
    <div class="page-wrapper cardhead">
        <div class="content container-fluid">
            @component('components.breadcrumb')
                @slot('title')
                    create category
                @endslot
            @endcomponent
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Create category for size chart</h5>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <x-error-messages class="my-custom-class" id="error-container" />
                                    <form
                                        action="{{ Route::is('categories.edit') ? Route('categories.update', $category->id) : Route('categories.store') }}"
                                        method="POST" class="needs-validation" novalidate>
                                        @csrf
                                        @if (Route::is('categories.edit'))
                                            @method('PUT')
                                        @endif
                                        @if (session('status'))
                                            <p class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </p>
                                        @endif
                                        <div class="form-row row">
                                            <div class="col-md-8 mb-3">
                                                <label class="form-label" for="validationCustom01">Category Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="validationCustom01" placeholder="Category Name"
                                                    value="{{ Route::is('categories.edit') ? $category->name : '' }}">

                                            </div>
                                        </div>
                                        <a href="" class="btn btn-light">Cancel</a>
                                        <button class="btn btn-primary" type="submit">
                                            @if (Route::is('categories.edit'))
                                                Update
                                            @else
                                                Create
                                            @endif Category
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
