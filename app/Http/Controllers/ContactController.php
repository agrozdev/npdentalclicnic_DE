<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('contact');
    }

    public function submit(Request $request): RedirectResponse
    {
        $data = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'phone' => ['nullable', 'string', 'max:40'],
            'subject' => ['required', 'string', 'in:implants,aligners,general'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
            'consent' => ['accepted'],
            'website' => ['nullable', 'size:0'],
        ])->validate();

        $to = config('site.contact.email');

        try {
            Mail::raw(
                "New contact enquiry from the website\n\n"
                ."Name: {$data['name']}\n"
                ."Email: {$data['email']}\n"
                ."Phone: ".($data['phone'] ?? 'n/a')."\n"
                ."Subject: {$data['subject']}\n\n"
                ."Message:\n{$data['message']}\n",
                function ($message) use ($to, $data) {
                    $message->to($to)
                        ->subject('New website enquiry — '.$data['subject'])
                        ->replyTo($data['email'], $data['name']);
                }
            );
        } catch (\Throwable $e) {
            Log::error('Contact form mail failed', [
                'error' => $e->getMessage(),
                'data' => $data,
            ]);

            return back()
                ->withInput()
                ->with('contact_error', __('contact.form.error'));
        }

        return redirect()
            ->route('contact')
            ->with('contact_success', __('contact.form.success'));
    }
}
