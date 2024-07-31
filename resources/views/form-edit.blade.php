@extends('layouts.layout')

@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Form Layout</h3>
                <p class="text-subtitle text-muted">Multiple form layout you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('update') }}" method="POST" class="form form-horizontal">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="id" value="{{ $employee->id }}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>First Name</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" value="{{ old('first_name') ?? $employee->first_name }}" class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name">
                                                @error('first_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Last Name</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" value="{{ old('last_name') ?? $employee->last_name }}" class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name">
                                            @error('last_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Birth Date</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input data-provide="datepicker" type="text" value="{{ old('date_of_birth') ?? $employee->date_of_birth }}" id="first-name" class="form-control @error('date_of_birth') is-invalid @enderror"
                                                name="date_of_birth">
                                            @error('date_of_birth')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Phone Number</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" value="{{ old('phone_number') ?? $employee->phone_number }}" class="form-control @error('phone_number') is-invalid @enderror"
                                                name="phone_number">
                                            @error('phone_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email Address</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email-id" value="{{ old('email_address') ?? $employee->email_address }}" class="form-control @error('email_address') is-invalid @enderror"
                                                name="email_address">
                                            @error('email_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Province</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select form-control @error('province_id') is-invalid @enderror" name="province_id" id="provinceSelect">
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->id }}" {{ old('province_id', $employee->province_id) == $province->id ? 'selected' : '' }}>{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('province_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>City</label>
                                        </div>
                                        <input type="hidden" value="{{ $employee->city_id }}" name="old_city">
                                        <div class="col-md-8 form-group">
                                            <select class="form-select form-control @error('city_id') is-invalid @enderror" name="city_id" id="citySelect" disabled="disabled">
                                                <option value="{{ $employee->city_id }}">{{ $employee->city->name }}</option>
                                            </select>
                                            @error('city_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Street Address</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea name="street_address" class="form-control @error('street_address') is-invalid @enderror" id="" cols="30" rows="10">{{ old('street_address') ?? $employee->street_address }}</textarea>
                                            @error('street_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Zip COde</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="email-id" value="{{ old('zip_code') ?? $employee->zip_code }}" class="form-control @error('zip_code') is-invalid @enderror"
                                                name="zip_code">
                                            @error('zip_code')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>KTP Number</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="email-id" value="{{ old('ktp_number') ?? $employee->ktp_number }}" class="form-control @error('ktp_number') is-invalid @enderror"
                                                name="ktp_number">
                                            @error('ktp_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Current Position</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select form-control @error('position_id') is-invalid @enderror" name="position_id" id="">
                                                <option value=""></option>
                                                @foreach ($positions as $position)
                                                    <option value="{{ $position->id }}" {{ old('position_id', $employee->position_id) == $position->id ? 'selected' : '' }}>{{ $position->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('position_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Bank Account</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select form-control @error('bank_id') is-invalid @enderror" name="bank_id" id="">
                                                    @foreach ($banks as $bank)
                                                        <option value="{{ $bank->id }}" {{ old('bank_id', $employee->bank_id) == $bank->id ? 'selected' : '' }}>{{ $bank->nama_bank }}</option>
                                                    @endforeach
                                            </select>
                                            @error('bank_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Bank Account Number</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="" value="{{ old('bank_account_number') ?? $employee->bank_account_number }}" class="form-control @error('bank_account_number') is-invalid @enderror"
                                                name="bank_account_number">
                                            @error('bank_account_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        {{-- <div class="col-md-4">
                                            <label>Upload KTP</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="file" name="ktp_file" class="basic-filepond">
                                        </div> --}}

                                        {{-- <div class="col-12 col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Basic File Uploader</h5>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <p class="card-text">Using the basic file uploader up, upload here to see how
                                                            <code>.basic-filepond</code> look.
                                                        </p>
                                                        <!-- Basic file uploader -->
                                                        <input type="file" class="basic-filepond">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $('.datepicker').datepicker({
        format: 'mm-dd-yyyy',
        startDate: '-3d'
    });
</script>
<script>
    $(document).ready(function() {
        $('#provinceSelect').on('change', function() {
            var provinceId = $(this).val();
            if(provinceId) {
                $.ajax({
                    url: '/getRegencies/' + provinceId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#citySelect').prop('disabled', false);
                        $('#citySelect').empty();
                        $('#citySelect').append('<option value="">Select City</option>');
                        $.each(data, function(key, value) {
                            $('#citySelect').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });
                    }
                });
            } else {
                $('#citySelect').empty();
                $('#citySelect').append('<option value="" disabled="disabled">Select City</option>');
            }
        });
    });
</script>
@endsection
