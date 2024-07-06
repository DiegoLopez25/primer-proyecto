@extends('layout/layout')

@section('main-content')
    <div class="pagetitle">
        <h1>Create Customer</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/customers">Customers</a></li>
                <li class="breadcrumb-item active">Create Customer</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <form action="/store" method="post" id='frmCustomer'>
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Create Customer</h5>
                            <div class="row g-3 mb-2">
                                <div class="col-lg-4">
                                    <label for="txt_nombre">Nombre</label>
                                    <input class="form-control" type="text" name="txt_nombre" id="txt_nombre">
                                </div>
                                <div class="col-lg-4">
                                    <label for="txt_apellido">Apellido</label>
                                    <input class="form-control" type="text" name="txt_apellido" id="txt_apellido">
                                </div>
                                <div class="col-lg-4">
                                    <label for="txt_telefono">Telefono</label>
                                    <input class="form-control" type="text" name="txt_telefono" id="txt_telefono">
                                </div>
                            </div>
                            <div class="row g-3 mb-2">
                                <div class="col-lg-4">
                                    <label for="txt_dui">Dui</label>
                                    <input class="form-control" type="text" name="txt_dui" id="txt_dui">
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <label for="txt_email">Email</label>
                                    <input class="form-control" type="email" name="txt_email" id="txt_email">
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <label for="txt_fecha_nacimiento">Fecha de Nacimiento</label>
                                    <input class="form-control" type="date" name="txt_fecha_nacimiento" id="txt_fecha_nacimiento">
                                </div>
                            </div>
                            <div class="row g-3 mb-2">
                                <div class="col-lg-12">
                                    <label for="txt_direccion">Direccion</label>
                                   <textarea class="form-control" name="txt_direccion" id="txt_direccion" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-lg-12 ">
                                   <button class="btn btn-success" style="background-color: #2eca6a" type="submit">Save <i class="bi bi-floppy-fill"></i></button>
                                   <button class="btn btn-secondary" type="button" id="btnBack">Back <i class="bi bi-arrow-left"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>            
                </form>
            </div>

        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#customers').removeClass('collapsed');
            $('#txt_dui').inputmask('99999999-9');
            $('#txt_telefono').inputmask('9999-9999');
            $('#txt_fecha_nacimiento').inputmask('99/99/9999');
        });

       $(document).on('submit',function(e) {
            e.preventDefault();
            let data = $('#frmCustomer').serialize();
            
            $.ajax({
                data: data,
                url: 'store',
                type: 'post',
                dataType: 'json',
                success: function (res){
                    Swal.fire({
                        icon: "success",
                        title: res.title,
                        text:res.msg,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    $('#frmCustomer')[0].reset();
                },
                error: function(error){
                    Swal.fire({
                        title:'Error!',
                        text:error.message,
                        icon:'error',
                        showConfirmButton:false,
                        timer: 2000
                    });
                }
            });
       });
    </script>
@endpush
