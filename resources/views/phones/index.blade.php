@extends('phones.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Phones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('phones.create') }}"> Create new Phones</a>
            </div>
            <br>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name Surname</th>
            <th>Phone Number</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($phones as $phone)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $phone->namesurname }}</td>
            <td>{{ $phone->phonenumber }}</td>
            <td>
                <form action="{{ route('phones.destroy',$phone->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('phones.show',$phone->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('phones.edit',$phone->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $phones->links() !!}
      
@endsection