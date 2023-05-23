<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    public static $subscriber;

    public static function subscriberStore($request){
        $request->validate([
            'email' => ['required', 'email', function ($attribute, $value, $fail) {
                // Check if the domain of the email address is valid
                $domain = explode('@', $value)[1];
                if (!checkdnsrr($domain, 'MX')) {
                    $fail($attribute.' is invalid.');
                }
            }]
        ]);
        self::$subscriber=new Subscriber();
        self::$subscriber->email=$request->email;
        self::$subscriber->save();
    }
}
