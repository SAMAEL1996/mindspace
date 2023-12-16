@extends('layouts.main')

@section('title', 'Sales')

@section('content')
<div class="content p-5">
    <div class="w-50">
        <div class="row pb-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>QTY</th>
                        <th>ITEM</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="row pb-2">
            <input type="date" class="form-control w-50 mx-auto">
        </div>
        <div class="row pb-2">
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-dark w-100" data-item="Whole Day Pass" data-value="500">Whole Day Pass</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-dark w-100" data-item="Whole Day Pass(Student)" data-value="400">Whole Day Pass (Student)</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-dark w-100" data-item="Monthly Pass" data-value="3000">Monthly Pass</a>
            </div>
        </div>
        <div class="row pb-2">
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-primary w-100" data-item="8-Hour Pass" data-value="400">8-Hour Pass</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-primary w-100" data-item="5-Hour Pass" data-value="300">5-Hour Pass</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-primary w-100" data-item="1-Hour Pass" data-value="75">1-Hour Pass</a>
            </div>
        </div>
        <div class="row pb-2">
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-primary w-100" data-item="8-Hour Pass(Student)" data-value="320">8-Hour Pass<br>(Student)</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-primary w-100" data-item="5-Hour Pass(Student)" data-value="240">5-Hour Pass<br>(Student)</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-primary w-100" data-item="1-Hour Pass(Student)" data-value="60">1-Hour Pass<br>(Student)</a>
            </div>
        </div>
        <div class="row pb-2">
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-secondary w-100" data-item="Strawberries and Cream" data-value="75">Strawberries and Cream</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-secondary w-100" data-item="Matcha Latte" data-value="75">Matcha Latte</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-secondary w-100" data-item="Spanish Latte" data-value="55">Spanish Latte</a>
            </div>
        </div>
        <div class="row pb-2">
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-secondary w-100" data-item="Caramel Latte" data-value="65">Caramel Latte</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-secondary w-100" data-item="White Mocha Latte" data-value="65">White Mocha Latte</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-secondary w-100" data-item="Vanilla Latte" data-value="55">Vanilla Latte</a>
            </div>
        </div>
        <div class="row pb-2">
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-secondary w-100" data-item="Cafe Latte" data-value="45">Cafe Latte</a>
            </div>
            <div class="col-lg-4">
                <a class="btn btn-lg btn-outline-secondary w-100" data-item="Mocha Latte" data-value="55">Mocha Latte</a>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>
@endsection

@push('scripts_after')
<script>
    $(document).ready(function() {
        console.log(true);
    });
</script>
@endpush