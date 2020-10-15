<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'user_type' => 'customer',
            'surname' => $input['surname'],
            'telephone' => $input['telephone'],
            'gender' => $input['gender'],
            'date_of_birth' => $input['date_of_birth'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        $to_name = 'Events';
        $to_email = $input['email'];
        $body = [];
        $mailData = array('body' => $body);
        Mail::send('email.register-mail', $mailData, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Aramıza Hoş Geldiniz :)');
            $message->from(env('MAIL_USERNAME'), 'Events');
        });
        return $user;
    }
}
