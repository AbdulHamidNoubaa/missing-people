<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Missing_pepole;
use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Validation\Rule;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $user = User::all();
        

         return view('users.index', compact('user'));
     }

     public function edit($id)
     {
         $user = User::findOrFail($id);
         return view('users.users_edit', compact('user'));
     }
    //  public function update(Request $request)
    //  {
    //     $id = $request->id;
    //     // $this->validate($request,[
        
    //     //  'section_name' => 'required|max:255|unique:users,name,'.$id,
    //     //  'description' => 'required',
    //     // ],
    //     // [
    //     //  'section_name.required' => 'يرجى ادخال اسم القسم',
    //     //  'section_name.regex' => 'القيمة المدخلة في اسم القسم خطأ',
    //     //  'section_name.unique' => 'اسم القسم مسجل مسبقاً',
    //     //  'description' => 'يرجى ادخال الوصف للقسم'
    //     // ]);
 
    //     $data_update = User::find($id);
    //     $data_update->update([
    //      'name'=>$request->name,
    //      'password' => Hash::make($request['password']),
    //      'email' => $request->email,
    //      'user_type' => $request->user_type,
    //     ]);
    //     session()->flash('edit','تم تعديل بيانات المستخدم بنجاج');
    //     return redirect('/users');
    //  }

     public function update(Request $request, $id)
    {
        $data_update = User::findOrFail($id);

        // إذا قام المستخدم بتغيير اسم القسم، نقوم بالتحقق من أن الاسم غير موجود بالفعل في القاعدة ما عدا القسم الحالي (ID)
        $request->validate([
            'email' => [
                'required',
                'max:255',
                Rule::unique('users', 'email')->ignore($data_update->id),
            ],
            'name' => 'required',
            // 'password' => 'required',
        ]);
    
        $data_update->update([
            'name'=>$request->name,
            // 'password' => Hash::make($request['password']),
            'email' => $request->email,
            'user_type' => $request->user_type,
           ]);
    
        session()->flash('success', 'تم تعديل بيانات المستخدم بنجاح.');
        return redirect()->route('users.index');
    }

    
    public function delete($id)
    {
        $missingPerson = User::find($id);
    
        if (!$missingPerson) {
            return redirect()->route('missing_people.index')->with('error', 'السجل غير موجود.');
        }
    
        $missingPerson->delete();
        
        return redirect()->route('missing_people.index')->with('success', 'تم حذف السجل بنجاح.');
    }

}
