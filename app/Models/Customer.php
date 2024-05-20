<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;


class Customer extends Model
{
    use HasFactory;

    private static $customer, $image, $imageUrl, $directory, $imageName, $extension, $images;

    private static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(1000, 50000000000).'.'.self::$extension;
        self::$directory = 'upload/customer-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
    }


    public static function saveInfo($request)
    {
        if ($request->file('image'))
        {
            self::getImageUrl($request);
        }
        else{
            self::$imageUrl = ' ';
        }

        self::$customer = new Customer();
        self::$customer->fname              = $request->fname;
        self::$customer->lname              = $request->lname;
        self::$customer->phone              = $request->phone;
        self::$customer->email              = $request->email;
        if ($request->password){
            self::$customer->password = bcrypt($request->password);
        }
        else{
            self::$customer->password = bcrypt($request->email);
        }
        self::$customer->address            = $request->address;
        self::$customer->gender             = $request->gender;
        self::$customer->date_of_birth      = $request->date_of_birth;
        self::$customer->image              = self::$imageUrl;
        self::$customer->save();
        return self::$customer;
    }

    public static function loginCheck($request)
    {
       self::$customer = Customer::where('email',$request->user_name)
                ->orWhere('phone',$request->user_name)
                ->first();
       if (self::$customer){
           if (password_verify($request->password,self::$customer->password)){

               Session::put('customer_id', self::$customer->id);
               Session::put('customer_name', self::$customer->fname);
               return redirect(route('home'));

           }else{
               return back()->with('passwordMessage','Please use valid password');
           }
       }else{
           return back()->with('nameMessage','Please use valid email or phone number');
       }

    }

    public static function updateProfile($request, $id){

        self::$customer = Customer::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$customer->image)){
                unlink(self::$customer->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$customer->image;
        }


        self::$customer->fname              = $request->fname;
        self::$customer->lname              = $request->lname;
        self::$customer->phone              = $request->phone;
        self::$customer->email              = $request->email;
        self::$customer->date_of_birth      = $request->date_of_birth;
        self::$customer->gender             = $request->gender;
        self::$customer->address            = $request->address;
        self::$customer->image              = self::$imageUrl;
        self::$customer->save();

    }

}
