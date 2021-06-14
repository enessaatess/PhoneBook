@extends('phones.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Phone</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('phones.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('phones.update',$phone->id) }}" method="POST">
        @csrf
        @method('PUT')
        <br>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name Surname:</strong>
                    <input type="text" name="namesurname" value="{{ $phone->namesurname }}" required class="form-control" placeholder="Name Surname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="number" name="phonenumber" value="{{ $phone->phonenumber }}" required class="form-control" placeholder="Phone Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <br>
            <br>
        </div>
   
    </form>
@endsection