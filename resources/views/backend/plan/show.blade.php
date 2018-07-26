@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
 @include('backend.plan.show.header')
 <div class="content">
   @include('backend.plan.show.plan')
 </div>
 @include('backend.layouts.footers.footer')
@endsection
