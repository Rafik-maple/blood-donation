@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Donor</span>
                    <span class="info-box-number">1</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-tint"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Blood Groups</span>
                    <span class="info-box-number">8</span>
                </div>
            </div>
        </div>

    </div>
@endsection
