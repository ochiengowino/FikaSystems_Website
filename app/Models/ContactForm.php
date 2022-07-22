<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactForm extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'phone_number', 'subject', 'message'];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    // public static function boot() {
  
    //     parent::boot();
  
    //     static::created(function ($item) {
                
    //         $adminEmail = "benjaminochieng99@gmail.com";
    //         Mail::to($adminEmail)->send(new ContactMail($item));
    //     });
    // }
}
