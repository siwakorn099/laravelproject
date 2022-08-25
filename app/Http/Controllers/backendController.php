<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\models\Employee;
class backendController extends Controller
{
    public function dashbord(){
        return view('backend.pages.dashbord');
    }
    public function employees(){
        // $data = array(
        //     'fullname' => 'Samit Koyom',
        //     'gender' => 'Male',
        //     'email' => 'samit@email.com',
        //     'tel' => '0898938889389',
        //     'age' => 38,
        //     'address' => '20/2 moo.2 bangkok',
        //     'avartar' => 'noavatar.jpg',
        //     'status' => 1
        // );
        // $employees = DB::table('employees')->insert($data);

    // การสร้างข้อมูลจากตาราง employees
    // $employees = DB::table('employees')->get();
    // อ่านแบบมีเงื่อนไข
    // $employees = DB::table('employees')
    //                     ->where('age','>','18')
    //                     ->where('gender','Female')
    //                     ->get(['fullname','gender','age']);
    // $employees = DB::table('employees')->find(5);
    // $employees = DB::table('employees')->count();
    // $employees = DB::table('employees')->max('age');
    // $employees = DB::table('employees')->min('age');
    // $employees = DB::table('employees')->avg('age');
            // การแก้ไขข้อมูลเข้าไปในตาราง --------------------------------------------
        // $data = array(
        //     'email' => 'samitkk@gmail.com',
        //     'tel' => '02222333444',
        //     'age' => 42
        // );

        // $employees = DB::table('employees')->where('id', 7)->update($data);
        $employees = DB::table('employees')->where('id', 1002)->delete();
    return $employees;
    }
    public function employeelist(){
        // อ่านข้อมูลทั้งหมดจากตาราง employees
        $employees = Employee::paginate(25);
        // อ่านแบบระบุเงื่อนไข
        // $employees = Employee::where('age','>','18')->orderBy('age')->get();

        // การส่งข้อมูลที่ได้ไปยัง view

        return view('backend.pages.employeelist', compact('employees'));
    }
}   
