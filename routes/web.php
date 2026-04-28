<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebController;

Route::post('/send-home-mail', [MailController::class, 'sendHomeMail'])->name('send.home.mail');

Route::get('/', [WebController::class,'home'])->name('home');
Route::get('/about', [WebController::class,'about'])->name('about');
Route::get('/services', [WebController::class,'services'])->name('services');
Route::get('/portfolio', [WebController::class,'portfolio'])->name('portfolio');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/contactus', [ContactController::class, 'contactusSubmit'])->name('contactus.page');
Route::post('/send-contact-mail', [MailController::class, 'sendContactMail'])->name('send.contact.mail');


