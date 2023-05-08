{{-- resources\views\docs\docs.blade.php --}}
@extends('layouts.cynosure.app')

@section('pageMeta')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="index, follow">
@endsection

@section('metaTitle', 'Template - ')

@section('pageStyles')
    {{-- CSS Styles go here --}}
@endsection

@section('pageFonts')
    {{-- Page Specific Fonts go here --}}
@endsection

@section('headScripts')
    {{-- Page Specific Scripts that need to be in the head go here --}}
@endsection

@section('bodyClasses', '')
@section('bodyStyles', '')

@section('pageTitle')
    <h1>theWORX</h1>
    <span>Sample Template</span>
@endsection

@section('content')
    {{-- Page Content goes here --}}
    <div class="container">
        <p><strong>theWORX</strong> Blade Template File.</p>
        <p>Content goes here.</p>
    </div>
@stop

@push('footerScripts')
    {{-- Page Specific Scripts that need to be below the footer go here --}}
@endpush
