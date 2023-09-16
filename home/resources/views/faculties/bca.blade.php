@extends('layouts.bcamains')

@section('content')
    <div class="row" style="margin: 20px 20px; padding-left:100px;">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem; ">
                <img src="{{ asset('asset/First Sem.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <form action="{{ route('opens.bcaopen') }}" method="GET">
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
                    <form action="{{ route('opens.bca2open') }}" method="GET">
                        @csrf
                        <button type="submit" style="btn btn-secondary">You can find all the notes related to Second
                            Semester.</button>
                    </form>
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
