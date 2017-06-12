<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use Session;

class FeedbackController extends Controller
{
    public function send_mail(Request $request)
    {
        $name = $request->name;
        $telephone = $request->telephone;
        
        $message = "\n";
        $message .= "Заявка";
        $message .= "\n";
        $message .= "\n";
        $message .= "Имя: " . $name;
        $message .= "\n";
        $message .= "телефон: " . $telephone;
        $message .= "\n";
        $message .= "\n";
        
        Mail::raw($message, function ($mail) use ($name, $telephone ) {
                
            $mail->from('test@ginnova.kz', 'Заявка' );
            $mail->to('roman.l@ginnova.kz')->subject('window-fashion');
            $mail->to('tester@ginnova.kz')->subject('window-fashion');
            $mail->to('info@purpur.kz')->subject('window-fashion');
            $mail->to('info@windowfashion.kz')->subject('window-fashion');
        });

        Session::flash('mail', "Успешно отправлено!");

        return back();
           
    }

    public function send_calc(Request $request)
    {
        $name = $request->name;
        $telephone = $request->telephone;

        $model = $request->model;
        $size = $request->size;
        $quantity = $request->quantity;
        $price = $request->price;

        $model = str_replace('<span class="filter-line"></span>', '', $model);
        $price = str_replace('&nbsp;', '', $price);
        
        $message = "\n";
        $message .= "Заявка";
        $message .= "\n";
        $message .= "\n";
        $message .= "Имя: " . $name;
        $message .= "\n";
        $message .= "Телефон: " . $telephone;
        $message .= "\n";
        $message .= "Модель: " . $model;
        $message .= "\n";
        $message .= "Размер: " . $size;
        $message .= "\n";
        $message .= "Количество: " . $quantity;
        $message .= "\n";
        $message .= "Цена: " . $price;
        $message .= "\n";

        Mail::raw($message, function ($mail) use ($name, $telephone ) {
                
            $mail->from('test@ginnova.kz', 'Заявка' );
            $mail->to('roman.l@ginnova.kz')->subject('window-fashion');
            $mail->to('tester@ginnova.kz')->subject('window-fashion');
            $mail->to('info@purpur.kz')->subject('window-fashion');
            $mail->to('info@windowfashion.kz')->subject('window-fashion');
        });

        Session::flash('mail', "Успешно отправлено!");
        
        return back();
    }

    public function send_contacts(Request $request)
    {
        $name = $request->name;
        $telephone = $request->telephone;
        $text = $request->text;
        
        $message = "\n";
        $message .= "Заявка";
        $message .= "\n";
        $message .= "\n";
        $message .= "Имя: " . $name;
        $message .= "\n";
        $message .= "телефон: " . $telephone;
        $message .= "\n";
        $message .= "Сообщение: " . $text;
        $message .= "\n";
        
        Mail::raw($message, function ($mail) use ($name, $telephone ) {
                
            $mail->from('test@ginnova.kz', 'Заявка' );
            $mail->to('roman.l@ginnova.kz')->subject('window-fashion');
            $mail->to('tester@ginnova.kz')->subject('window-fashion');
            $mail->to('info@purpur.kz')->subject('window-fashion');
            $mail->to('info@windowfashion.kz')->subject('window-fashion');
        });
        
        Session::flash('mail', "Успешно отправлено!");

        return back();

        /*
        try {
            Mail::raw($message, function ($mail) use ($name, $telephone, $text ) {
                //$mail->from(env('MAIL_USERNAME'), $name );
                $mail->from('tester@ginnova.kz', 'Заявка' );
                $mail->to('em@ginnova.kz');
                $mail->to('tester@ginnova.kz');
            });
            return back()->with('status', $name . trans('messages.feedback_success') );
            Session::flash('message', "Отправлено");
            return redirect('/');
        }
        catch (\Throwable $t) {
            return back()->with('status', $name . trans('messages.feedback_error') );
        }
        */
    }
}
