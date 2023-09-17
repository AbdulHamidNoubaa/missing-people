<?php

namespace App\Http\Controllers;

use App\Models\Missing_pepole;
use Illuminate\Http\Request;

class Missing_peopleController extends Controller
{


  public function index()
{
    $people = Missing_pepole::all();

    return view('missing_pepole.index', compact('people'));
}

public function index1()
{
    $missingPeopleCount = Missing_pepole::count();

    return view('welcome', compact('missingPeopleCount'));
}


    public function create()
  {
    return view('missing_pepole.missing_pepole'); 
  }

  // public function store(Request $request)
  // {
  //   $missingPerson = Missing_pepole::create($request->all()); 
  //   return redirect()->route('missing_people.index')->with('success', 'تمت الإضافة بنجاح!');
  // }
  public function store(Request $request)
{
    $validatedData = $request->validate([
        'first_name_miss' => 'required|string|max:255',
        'last_name_miss' => 'required|string|max:255',
        'birth_date' => 'required|date',
        'disappearance_date' => 'required|date',
        'city_miss' => 'required|string|max:255',
        'address_street_miss' => 'required|string|max:255',
        'phone_number_miss' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'clothing' => 'required|string|max:255',
        'distinctive_features' => 'required|string|max:255',
        'additional_info' => 'nullable|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // 
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'phone_number' => 'required|string|max:255',
        'whtas_phone_number' => 'required|string|max:255',
        'rrmp' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'address_street' => 'required|string|max:255',
    ],
    [
      'first_name_miss.required' => 'حقل الاسم الأول مطلوب.',
      'last_name_miss.required' => 'حقل الاسم الأخير مطلوب.',
      'birth_date.required' => 'حقل تاريخ الميلاد مطلوب.',
      'birth_date.date' => 'تاريخ الميلاد يجب أن يكون تاريخًا صحيحًا.',
      'disappearance_date.required' => 'حقل تاريخ الاختفاء مطلوب.',
      'disappearance_date.date' => 'تاريخ الاختفاء يجب أن يكون تاريخًا صحيحًا.',
      'city_miss.required' => 'حقل المدينة مطلوب.',
      'address_street_miss.required' => 'حقل العنوان مطلوب.',
      'phone_number_miss.required' => 'حقل رقم الهاتف مطلوب.',
      'gender.required' => 'حقل الجنس مطلوب.',
      'clothing.required' => 'حقل اخر ملابس لابسها المفقود مطلوب.',
      'distinctive_features.required' => 'حقل علامات مميزة مطلوب.',
      'image.image' => 'الملف الذي تم رفعه ليس صورة.',
      'image.mimes' => 'يجب أن يكون الصورة من نوع jpeg أو png أو jpg أو gif.',
      'image.max' => 'حجم الصورة يجب أن يكون أقل من 2 ميجابايت.',
      'first_name.required' => 'حقل الاسم مطلوب.',
      'last_name.required' => 'حقل اللقب مطلوب.',
      'city.required' => 'حقل المدينة مطلوب.',
      'phone_number.required' => 'حقل رقم الهاتف مطلوب.',
      'whtas_phone_number.required' => 'حقل رقم هاتف الوتس اب مطلوب.',
      'rrmp.required' => 'حقل صلة القرابة مطلوب.',
      'email.required' => 'حقل البريد الإلكتروني مطلوب.',
      'email.email' => 'البريد الإلكتروني يجب أن يكون عنوان بريد إلكتروني صحيحًا.',
      'address_street.required'=>'حقل الشارع مطلوب',
    ]
  );

    $missingPerson = new Missing_pepole();
    $missingPerson->first_name_miss = $validatedData['first_name_miss'];
    $missingPerson->last_name_miss = $validatedData['last_name_miss'];
    $missingPerson->birth_date = $validatedData['birth_date'];
    $missingPerson->disappearance_date = $validatedData['disappearance_date'];
    $missingPerson->city_miss = $validatedData['city_miss'];
    $missingPerson->address_street_miss = $validatedData['address_street_miss'];
    $missingPerson->phone_number_miss = $validatedData['phone_number_miss'];
    $missingPerson->gender = $validatedData['gender'];
    $missingPerson->clothing = $validatedData['clothing'];
    $missingPerson->distinctive_features = $validatedData['distinctive_features'];
    $missingPerson->additional_info = $validatedData['additional_info'];
    
    $missingPerson->first_name = $validatedData['first_name'];
    $missingPerson->last_name = $validatedData['last_name'];
    $missingPerson->city = $validatedData['city'];
    $missingPerson->phone_number = $validatedData['phone_number'];
    $missingPerson->whtas_phone_number = $validatedData['whtas_phone_number'];
    $missingPerson->rrmp = $validatedData['rrmp'];
    $missingPerson->email = $validatedData['email'];
    $missingPerson->address_street = $validatedData['address_street'];
    $image = $request->file('image');
if ($request->hasFile('image')) {
  $image = $request->file('image');
  $imageName = time() . '.' . $image->getClientOriginalExtension();
  $image->move(public_path('images'), $imageName);
  $missingPerson->image = $imageName;
}


    $missingPerson->save();
    return redirect()->route('missing_people.create')->with('success', 'تمت إضافة البيانات بنجاح.');
}

public function show($id)
{
    $missingPerson = Missing_pepole::find($id);

    if (!$missingPerson) {
        return redirect()->route('missing_people.index')->with('error', 'الشخص المفقود غير موجود.');
    }

    return view('missing_pepole.show', compact('missingPerson'));
}

public function edit($id)
{
    $missingPerson = Missing_pepole::find($id);

    if (!$missingPerson) {
        return redirect()->route('missing_people.index')->with('error', 'الشخص المفقود غير موجود.');
    }

    return view('missing_pepole.edit_missing_pepole', compact('missingPerson'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'first_name_miss' => 'required|string|max:255',
        'last_name_miss' => 'required|string|max:255',
        'birth_date' => 'required|date',
        'disappearance_date' => 'required|date',
        'city_miss' => 'required|string|max:255',
        'address_street_miss' => 'required|string|max:255',
        'phone_number_miss' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'clothing' => 'required|string|max:255',
        'distinctive_features' => 'required|string|max:255',
        'additional_info' => 'nullable|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // قواعد للصورة
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'phone_number' => 'required|string|max:255',
        'whtas_phone_number' => 'required|string|max:255',
        'rrmp' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'address_street' => 'required|string|max:255',
    ],
    [
      'first_name_miss.required' => 'حقل الاسم الأول مطلوب.',
      'last_name_miss.required' => 'حقل الاسم الأخير مطلوب.',
      'birth_date.required' => 'حقل تاريخ الميلاد مطلوب.',
      'birth_date.date' => 'تاريخ الميلاد يجب أن يكون تاريخًا صحيحًا.',
      'disappearance_date.required' => 'حقل تاريخ الاختفاء مطلوب.',
      'disappearance_date.date' => 'تاريخ الاختفاء يجب أن يكون تاريخًا صحيحًا.',
      'city_miss.required' => 'حقل المدينة مطلوب.',
      'address_street_miss.required' => 'حقل العنوان مطلوب.',
      'phone_number_miss.required' => 'حقل رقم الهاتف مطلوب.',
      'gender.required' => 'حقل الجنس مطلوب.',
      'clothing.required' => 'حقل اخر ملابس لابسها المفقود مطلوب.',
      'distinctive_features.required' => 'حقل علامات مميزة مطلوب.',
      'image.image' => 'الملف الذي تم رفعه ليس صورة.',
      'image.mimes' => 'يجب أن يكون الصورة من نوع jpeg أو png أو jpg أو gif.',
      'image.max' => 'حجم الصورة يجب أن يكون أقل من 2 ميجابايت.',
      'first_name.required' => 'حقل الاسم مطلوب.',
      'last_name.required' => 'حقل اللقب مطلوب.',
      'city.required' => 'حقل المدينة مطلوب.',
      'phone_number.required' => 'حقل رقم الهاتف مطلوب.',
      'whtas_phone_number.required' => 'حقل رقم هاتف الوتس اب مطلوب.',
      'rrmp.required' => 'حقل صلة القرابة مطلوب.',
      'email.required' => 'حقل البريد الإلكتروني مطلوب.',
      'email.email' => 'البريد الإلكتروني يجب أن يكون عنوان بريد إلكتروني صحيحًا.',
      'address_street.required'=>'حقل الشارع مطلوب',
    ]
  );

  $missingPerson = Missing_pepole::findOrFail($id);

    $missingPerson = new Missing_pepole();
    $missingPerson->first_name_miss = $validatedData['first_name_miss'];
    $missingPerson->last_name_miss = $validatedData['last_name_miss'];
    $missingPerson->birth_date = $validatedData['birth_date'];
    $missingPerson->disappearance_date = $validatedData['disappearance_date'];
    $missingPerson->city_miss = $validatedData['city_miss'];
    $missingPerson->address_street_miss = $validatedData['address_street_miss'];
    $missingPerson->phone_number_miss = $validatedData['phone_number_miss'];
    $missingPerson->gender = $validatedData['gender'];
    $missingPerson->clothing = $validatedData['clothing'];
    $missingPerson->distinctive_features = $validatedData['distinctive_features'];
    $missingPerson->additional_info = $validatedData['additional_info'];
    
    $missingPerson->first_name = $validatedData['first_name'];
    $missingPerson->last_name = $validatedData['last_name'];
    $missingPerson->city = $validatedData['city'];
    $missingPerson->phone_number = $validatedData['phone_number'];
    $missingPerson->whtas_phone_number = $validatedData['whtas_phone_number'];
    $missingPerson->rrmp = $validatedData['rrmp'];
    $missingPerson->email = $validatedData['email'];
    $missingPerson->address_street = $validatedData['address_street'];
    $image = $request->file('image');
if ($request->hasFile('image')) {
  $image = $request->file('image');
  $imageName = time() . '.' . $image->getClientOriginalExtension();
  $image->move(public_path('images'), $imageName);
  $missingPerson->image = $imageName;
}
    $missingPerson->save();
    return redirect()->route('/')->with('success', 'تمت تعديل البيانات بنجاح.');
}

public function delete($id)
{
    $missingPerson = Missing_pepole::find($id);

    if (!$missingPerson) {
        return redirect()->route('missing_people.index')->with('error', 'السجل غير موجود.');
    }

    $missingPerson->delete();
    
    return redirect()->route('missing_people.index')->with('success', 'تم حذف السجل بنجاح.');
}

}

