@extends('layouts.bscmains')

@section('content')
    <div class="row" style="margin: 20px 20px; padding-left:100px;">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem; ">
                <img src="{{ asset('asset/First Sem.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-text" href="{{ route('bsc_sem.1sem') }}">You can find all the notes related to First
                        Semester.</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/Second Sem.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-text" href="{{ route('bsc_sem.2sem') }}">You can find all the notes related to Second
                        Semester.</a>
                </div>
            </div>
        </div>
        {{-- <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/Third Sem.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-text" href="{{ route('bca_sem.1sem') }}">You can find all the notes related to
                        BSc.Csit.</a>
                </div>
            </div>
        </div> --}}
    </div>

    {{-- {{Ends here}} --}}
@endsection
