<?php

namespace App\Http\Controllers\frontend;

use App\Models\SendContactUsMail;
use App\Mail\ContactUsMail;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    // === Home
    public function index(Request $request)
    {
        return view('frontend.home');
    }

    // === Contact Us Store
    public function sendContact(Request $request)
    {
        $this->validate($request, [
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
            'g-recaptcha-response' => 'required|captcha',
        ],[
            'f_name.required' => 'First name is required',
            'l_name.required' => 'Last name is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'service.required' => 'Service is required',
            'country.required' => 'Country is required',
            'message.required' => 'Message is required',
            'g-recaptcha-response.required' => 'Captcha is required',
            'g-recaptcha-response.captcha' => 'Captcha is invalid',            
        ]);

        // Check if the reCAPTCHA is valid
        if (!$request->input('g-recaptcha-response')) {
            return redirect()->back()->withErrors(['captcha' => 'Captcha is required']);
        }
        // Verify the reCAPTCHA response
        $recaptchaSecret = config('captcha.secret');
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
        $response = file_get_contents($recaptchaUrl . '?secret=' . $recaptchaSecret . '&response=' . $recaptchaResponse);

        // Step 1: Store the Contact Us Data
        $contact = new SendContactUsMail();
        $contact->f_name = $request->f_name;
        $contact->l_name = $request->l_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->service = $request->service;
        $contact->country = $request->country;
        $contact->message = $request->message;
        $contact->inserted_at = Carbon::now();
        $contact->save();

        $update = [
            'inserted_by' => $contact->id,                  
        ];

        // Step 2: Update the Contact Us Data with the inserted_by field
        SendContactUsMail::where('id', $contact->id)->update($update);

        // Step 3: Prepare the email data
        $data = [
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service' => $request->service,
            'country' => $request->country,
            'message' => $request->message,
        ];

        // Step 4: Send the email notification
        Mail::to('contact@sararesearch.com')
        ->cc(['onkar@matrixbricks.com', 'abhishek@matrixbricks.com'])
        ->send(new ContactUsMail($data));

        return redirect()->route('thank-you')->with('success', 'Your message has been sent successfully.');
    
    }
}
