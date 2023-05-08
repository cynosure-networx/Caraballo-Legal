@extends('layouts.canvas.app')

@section('page-title', 'App Info Page')

@section('page-fonts')
    {{-- Page Fonts Go Here --}}
@endsection

@section('page-styles')
    {{-- Page Styles Go Here --}}
@endsection

@section('header-scripts')
    {{-- Page Header Scripts Go Here --}}
@endsection

@section('page-header')
    header
@endsection

@section('content')
    PHP Version {{ PHP_VERSION }}<br>
    Laravel Version {{ App::VERSION() }}
    {{ phpinfo() }}
@endsection

@push('body-scripts')
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>{{-- Page Footer Scripts Go Here --}}
@endpush
