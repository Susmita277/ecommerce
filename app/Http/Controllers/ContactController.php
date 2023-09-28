<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\Form;
use Hash;
use App\Http\Requests\FrontendContactFormRequest;

class ContactController extends Controller
{


    public function frontend_index(){
        return view('frontend.contactpage');
      }

      public function index(Request $request){
        $search= $request['search'];
        $contacts = ContactForm::paginate(10);
        if ($search != null) {
            $contacts = ContactForm::where('name', 'LIKE', "%$search%")
            ->orWhere('email', 'LIKE', "%$search%")
            ->get();
            return view('backend.contactus')->with(compact('contacts', 'search'));
        }

        else {
        return view('backend.contactus')->with(compact('contacts'));
      }
    }
    // public function search(Requests $request){
    //     return $request->all();
    // }
    public function store(FrontendContactFormRequest $request) {
      $validated = $request->validated();

        ContactForm::create([
          'name' => $validated['name'],
          'email' => $validated['email'],
          'textarea' => $validated['textarea'],
        ]);

        return redirect()->route('contactform.index');
    }
    public function edit($id)
  {
    $contact = ContactForm::findOrFail($id);
    return view('backend.ContactEdit', compact('contact'));

  }

    public function update(Request $request, $id)
    {
    $contact = ContactForm::findOrFail($id);
      $validated = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'textarea' => 'required',

      ]);


    $contact->update([
      'name' => $validated['name'],
      'email' => $validated['email'],
      'textarea'    => $validated['textarea'],
    ]);

    return redirect()->route('contactform.index');
  }

  public function delete($id){
   ContactForm::findOrFail($id)->delete();
   return redirect('contactform.index');
  }


}
