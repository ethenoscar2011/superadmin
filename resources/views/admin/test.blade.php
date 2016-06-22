@extends('layouts.admin.main')

@section('title', '馨瑞首页')

@section('csses')
<!-- Morris Charts CSS -->
<link href="{{ asset('/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
    <h1 class="page-header">首页</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection

@section('scripts')
<!-- Morris Charts JavaScript -->
<script src="{{ asset('/bower_components/raphael/raphael-min.js') }}"></script>
@endsection