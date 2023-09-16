@extends('layouts.bimains')

@section('content')
    <div class="row" style="margin: 20px 20px; padding-left:100px;">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem; ">
                <img src="{{ asset('asset/First Sem.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <form action="{{ route('opens.bimopen') }}" method="GET">
                        @csrf
                        <button type="submit" style="btn btn-secondary">You can find all the notes related to First
                            Semester.</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/Second Sem.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <form action="{{ route('opens.bim2open') }}" method="GET">
                        @csrf
                        <button type="submit" style="btn btn-secondary">You can find all the notes related to Second
                            Semester.</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
