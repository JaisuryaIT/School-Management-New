@extends('layouts.main')
@section('title','Add Circular')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="card">
    <div class="card-body">
    <h5 class="mb-3">Basic Form</h5>
    <form>
        <div class="row">
        <div class="col-md-6">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" id="tb-fname" placeholder="Enter Name here" />
            <label for="tb-fname">Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
            <input type="email" class="form-control" id="tb-email" placeholder="name@example.com" />
            <label for="tb-email">Email address</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
            <input type="password" class="form-control" id="tb-pwd" placeholder="Password" />
            <label for="tb-pwd">Password</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
            <input type="password" class="form-control" id="tb-cpwd" placeholder="Password" />
            <label for="tb-cpwd">Confirm Password</label>
            </div>
        </div>
        <div class="col-12">
            <div class="d-md-flex align-items-center mt-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                Remember me
                </label>
            </div>
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Submit
                </div>
                </button>
            </div>
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
@endpush

@push('javascript')
<script>

</script>
@endpush