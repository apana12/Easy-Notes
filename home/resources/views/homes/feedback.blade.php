@extends('layouts.main')

@section('content')
    <H2 style="margin-left:35px;">Feedback</H2>
    <FORM action="emailtype@gmail.com" method="post" enctype="text/plain"
        style="margin-left:35px; font-style:bold; font-size:20px;">
        Email: <INPUT type="email" name="mail" placeholder="e-mail address">
        <BR>
        <BR>
        Comment :<BR>
        <TEXTAREA rows="6" cols="50" name="commentfield"></TEXTAREA>
        <BR>
        <INPUT TYPE="submit" value="Send Feedback" style="margin-bottom:100px;">
        <INPUT TYPE="reset" value="Reset">
    </FORM>
@endsection
