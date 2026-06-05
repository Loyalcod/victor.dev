<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/download-cv', function () {
    $file = public_path('pdf/akujuobi-victor-cv.pdf');

    abort_unless(file_exists($file), 404);

    return response()->download($file, 'Akujuobi-Victor-Chibuike-CV.pdf', [
        'Content-Type' => 'application/pdf',
    ]);
})->name('cv.download');

Route::get('/cv-preview', function () {
    $file = public_path('pdf/akujuobi-victor-cv.pdf');

    abort_unless(file_exists($file), 404);

    return response()->file($file, [
        'Content-Type' => 'application/pdf',
    ]);
})->name('cv.preview');

Route::view('/', 'welcome', [
    'page' => 'home',
    'title' => 'Home - Professional Portfolio Restore',
])->name('home');

Route::view('/projects', 'projects', [
    'page' => 'projects',
    'title' => 'Projects - Akujuobi Victor Chibuike',
])->name('projects');

Route::view('/skills', 'skills', [
    'page' => 'skills',
    'title' => 'Skills & CV - Brand Icon Update',
])->name('skills');

Route::view('/contact', 'contact', [
    'page' => 'contact',
    'title' => 'Contact - Akujuobi Victor Chibuike',
])->name('contact');

Route::post('/contact', function (Request $request) {
    if (config('mail.default') === 'log') {
        return back()
            ->withInput()
            ->withErrors([
                'mail' => 'Email delivery is not configured yet. Set MAIL_MAILER to smtp and add valid SMTP credentials in your .env file.',
            ]);
    }

    $data = $request->validate([
        'name' => ['required', 'string', 'max:120'],
        'email' => ['required', 'email', 'max:160'],
        'subject' => ['nullable', 'string', 'max:180'],
        'message' => ['required', 'string', 'max:5000'],
    ]);

    $subject = $data['subject'] ?: 'Portfolio website message';
    $body = implode("\n", [
        'New portfolio message',
        '',
        'Name: '.$data['name'],
        'Email: '.$data['email'],
        'Subject: '.$subject,
        '',
        'Message:',
        $data['message'],
    ]);

    try {
        Mail::raw($body, function ($message) use ($data, $subject) {
            $message->to('victorakujuobichibuike@gmail.com')
                ->replyTo($data['email'], $data['name'])
                ->subject($subject);
        });
    } catch (Throwable $exception) {
        report($exception);

        return back()
            ->withInput()
            ->withErrors([
                'mail' => 'The message could not be sent. Please check your SMTP username, password, host, port, and encryption settings.',
            ]);
    }

    return back()->with('status', 'Message sent successfully. I will reply as soon as possible.');
})->name('contact.send');
