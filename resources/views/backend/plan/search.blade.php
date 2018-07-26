@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
 @include('backend.plan.search.header')
 <div class="content">
   @include('backend.plan.search.articles_table')
 </div>
 @include('backend.layouts.footers.footer')
@endsection
