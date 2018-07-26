@extends('backend.layouts.app')

@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
 @include('backend.plan.edit.header')
 <div class="content">
   @include('backend.plan.edit.form')
 </div>
 @include('backend.layouts.footers.footer')
@endsection
@section('page_scripts')
 <!-- CKeditor -->
 <script src='{{ URL::asset('ckeditor/ckeditor.js') }}'></script>
@endsection
