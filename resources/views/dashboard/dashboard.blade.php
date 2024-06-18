@extends('layout/layout')

@section('main-content')
<div class="pagetitle">
    <h1 >Bienvenido</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

       <div class="col-lg-12">
        
       </div>

    </div>
</section>
@endsection

@push('scripts')
<script>
     $(document).ready(function() {
        $('#dashboard').removeClass('collapsed');
    })
</script>
@endpush

