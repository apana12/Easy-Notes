@extends('layouts.feed-mains')

@section('content')
    {{-- <form method="post" enctype="text/plain">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        {{-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"> --}}

    {{-- <h1 class="h3 mb-3 fw-normal" style="margin-top: 40px;text-align:center; "> Feedback </h1>

        @include('layouts.partials.messages')
        <div class="form-group form-floating mb-3" style="padding:2rem 10rem;width:50%;height:25px;margin:auto;">
            <input type="emailtype@gmail.com" class="form-control" name="email" value="{{ old('email') }}"
                placeholder="email" required="required" autofocus>
            <label for="floatingEmail" style="margin-top:33px; padding-left:20rem;"> Email </label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-floating" style="padding:2rem 10rem;width:50%;height:50%;margin:auto;">
            <textarea class="form-control" placeholder="Leave a comment here" name="comment" value="{{ old('comment') }}" style="height: 100px"></textarea>
            <label for="floatingTextarea2"style="margin-top:33px; padding-left:19rem">Comments</label>
            @if ($errors->has('comment'))
                <span class="text-danger text-left">{{ $errors->first('comment') }}</span>
            @endif
        </div>
        <div style="padding-left:35rem">
            <button class="w-25 btn btn-lg btn-primary" type="submit">Send Feedback</button>
        </div>
        @include('auth.partials.copy')
    </form> --}}

    <div class="container" style="margin-top: 40px; margin-bottom:100px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Submit Feedback</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('homes.submit') }}" id="feedback-form">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea name="comment" id="comment" class="form-control" required></textarea>
                                @error('comment')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-top:10px;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('#feedback-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('homes.submit') }}',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Handle the success response, e.g., show a success message
                        console.log(response.message);
                    },
                    error: function(error) {
                        // Handle validation errors or other errors
                        console.log(error.responseJSON.errors);
                    }
                });
            });
        });
    </script>
@endsection
