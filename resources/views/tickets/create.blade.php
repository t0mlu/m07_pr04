@extends('tickets.layout')

@section('header')
<h1>Ticket creation</h1>
@endsection

@section('content')
<form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        Title: <input type="text" name="title"/>
    </div>
    <div>
        Description: <textarea name="description"></textarea>
    </div>
    <div>
        File: <input type="file" name="screenshot"/>
    </div>
    <div>
        Creator: <input type="text" name="creator"/>
    </div>
    <div>
        Priority: <select type="text" name="priority">
            <option value="low">Low</option>
            <option value="mid">Mid</option>
            <option value="high">High</option>
        </select>
    </div>
    <div>
        <input type="submit" name="submit"/>
    </div>
</form>
@endsection