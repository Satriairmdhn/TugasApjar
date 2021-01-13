@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <b>Faculty Administration</b> | Admin
                </div>
                <div class="card-body">
                    @livewire('apjar.user.admin.faculty-edit')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
