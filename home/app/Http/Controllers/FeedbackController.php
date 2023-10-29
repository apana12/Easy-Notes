<?php

namespace App\Http\Controllers;
use App\Models\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('homes.feedback');
    }



    public function submitFeedback(Request $request)
    {
    // Validation rules
    $rules = [
        'email' => 'required|email|min:8',
        'comment' => 'required',
    ];

    // Custom error messages
    $messages = [
        'email.min' => 'Email length should be more than 8',
        'email.email' => 'Enter a valid email',
        'comment.required' => 'Comment should be filled',
    ];

    // Validate the request
    $request->validate($rules, $messages);

    // Get the currently authenticated user (assuming you have authentication set up)
    $user = auth()->user();

    // Create a new feedback record associated with the user
    $feedback = new Feedback([
        'email' => $request->input('email'),
        'comment' => $request->input('comment'),
    ]);

    // Associate the feedback with the user
    $user->feedback()->save($feedback);

    // Redirect or return a response
    return redirect()->route('homes.submit')->with('success', 'Feedback submitted successfully');
    }

    

}
