@extends('layout/layout')

@section('main-content')
<div class="pagetitle">
    <h1>Customers</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Customers</li>
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
        $('#customers').removeClass('collapsed');
    })
</script>
@endpush