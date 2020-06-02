@extends('admin.layout')

@section('extracss')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
@endsection

@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit Drives</h5>
            </div>
            <div class="card-body">
                <form id="validation-form123" method="post">
                    @csrf
                    <h5>Basic Details</h5>
                    <hr>
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Company Name</label>
                                <input type="text" id="company_name" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{$drive['company_name']}}" placeholder="Company Name" required>
                                @error('company_name')
                                <label class="error jquery-validation-error small form-text invalid-feedback" for="company_name">{{$errors->first('company_name')}}</label>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Drive Description" required>{{$drive['description']}}</textarea>
                                @error('description')
                                <label class="error jquery-validation-error small form-text invalid-feedback" for="">{{$errors->first('description')}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-md-12">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control" value="{{$drive['date']}}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Time</label>
                                    <input type="time" name="time" class="form-control" value="{{$drive['time']}}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Last date to register</label>
                                    <input type="date" name="last_date_to_register" class="form-control" value="{{$drive['last_date_to_register']}}" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    
                                    <input type="hidden" name="id" class="form-control" value="{{$drive['id']}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Venue</label>
                                <input type="text" class="form-control" name="venue" value="{{$drive['venue']}}" placeholder="Venue" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <button type="submit" class="btn  btn-primary">Update</button>
                        </div>
                    <hr>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extrajs')
<script src="/assets/js/menu-setting.min.js"></script>
<script src="/assets/js/plugins/select2.full.min.js"></script>
<script src="/assets/js/pages/form-select-custom.js"></script>
<script src="/assets/js/menu-setting.min.js"></script>
<!-- <script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script> -->
@endsection