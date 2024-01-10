@extends('layouts.main')
@section('title','Edit Exam')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="card">
    <div class="card-body">
    <div class="heading-layout1">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Exam Info</h3>
            </div>
            <div class="col-auto text-end float-end ms-auto download-grp">
                <button class="btn btn-primary w-100 justify-content-center me-2 d-flex align-items-center mb-3 mb-sm-0"
                data-bs-toggle="modal" data-bs-target="#editmodal">Edit Exam Info</button>
            </div>
        </div>
    </div>
    <div class="single-info-details">
        <div class="item-content">
            <div class="info-table table-responsive">
                <table class="table text-nowrap">
                    <tbody>
                        <tr>
                            <td>Exam Name:</td>
                            <td class="font-medium text-dark-medium">{{$data->exam_code}}</td>
                        </tr>
                        <tr>
                            <td>Class:</td>
                            <td class="font-medium text-dark-medium">{{$data->class_name}}</td>
                        </tr>
                        <tr>
                            <td>Subject:</td>
                            <td class="font-medium text-dark-medium">{{$data->subject_name}}</td>
                        </tr>
                        <tr>
                            <td>Start Time:</td>
                            <td class="font-medium text-dark-medium">{{$data->start_time}}</td>
                        </tr>
                        <tr>
                            <td>End Time:</td>
                            <td class="font-medium text-dark-medium">{{$data->end_time}}</td>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td class="font-medium text-dark-medium">{{$data->exam_date}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
<div class="modal fade" id="editmodal" tabindex="-1"
                        aria-labelledby="bs-example-modal-lg" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header d-flex align-items-center">
        <h4 class="modal-title" id="myLargeModalLabel">
        Edit Exam
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
        aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form action="{{url('updateexam',$data->id)}}" method="post">
    @csrf
        <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select" name="class_id">
                <option>Select Class</option>
                @foreach($classes as $class)
                <option value="{{ $class->id }}">{{$class->ClassID}}</option>         
                @endforeach  
            </select>
            <label for="tb-fname">Class</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select" name="subject_code">
                <option>Select Subject</option>
                @foreach($subjects as $subject)
                <option value="{{ $subject->subject_code }}">{{$subject->subject_name}}</option>         
                @endforeach  
            </select>
            <label for="tb-email">Subject</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <select class="form-control select" name="type">
                <option>Select Type</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
                <option value="cycle">Cycle</option>
                <option value="term">Term</option>
                <option value="final">Final</option>
            </select>
            <label for="tb-pwd">Type</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="number" name="maximum_mark" class="form-control" id="tb-cpwd"/>
            <label for="tb-cpwd">Maximum Mark</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="time" name="start_time" class="form-control" id="tb-cpwd"/>
            <label for="tb-cpwd">Start Time</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="time" name="end_time" class="form-control" id="tb-cpwd"/>
            <label for="tb-cpwd">End Time</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="date" name="exam_date" class="form-control" id="tb-cpwd"/>
            <label for="tb-cpwd">Exam Date</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Update Exam Details
                </div>
                </button>
            </div>
        </div>
        </div>
    </form>
    </div>
    <div class="modal-footer">
        <button type="button"
        class="btn bg-danger-subtle text-danger font-medium waves-effect text-start"
        data-bs-dismiss="modal">
        Close Edit
        </button>
    </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
@endpush
@push('javascript')
<script>

</script>
@endpush