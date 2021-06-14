@extends('phones.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Phone</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('phones.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Surname:</strong>
                {{ $phone->namesurname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                {{ $phone->phonenumber }}
            </div>
        </div>
    </div>
@endsection