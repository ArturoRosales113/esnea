@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
 @include('backend.plan.index.header')
 <div class="content">
   @include('backend.plan.index.planes_table')
 </div>
 @include('backend.layouts.footers.footer')
@endsection
