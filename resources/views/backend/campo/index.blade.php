@extends('backend.layouts.app')
@section('content')
 <!-- Navbar -->
 @include('backend.layouts.navbars.nav_expand')
 @include('backend.campo.index.header')
 <div class="content">
   @include('backend.campo.index.campos_table')
 </div>
 @include('backend.layouts.footers.footer')
@endsection
