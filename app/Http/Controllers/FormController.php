<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Mail\FormSubmissionMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Company;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $formName = $request->input('form_name');

        $validationRules = $this->getValidationRules($formName);
        $validatedData = $request->validate($validationRules);
        $formData = collect($validatedData)->except(['form_name', 'name', 'email', 'phone'])->toArray();

        $companyId = $request->input('company_id') ?? 1;

        $form = Form::create([
            'form_name' => $formName,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'form_data' => $formData,
            'ip' => request()->ip(),
            'company_id' => $companyId
        ]);

        //$recipientEmail = ['rashidk.developer@gmail.com'];
        $recipientEmail = [config('custom.to_email')];
            
        try {
            Mail::to($recipientEmail)
                ->send(new FormSubmissionMail($formName, $validatedData));
            logger('Mail sent successfully to: ' . json_encode($recipientEmail));
        } catch (\Exception $e) {
            logger('Mail send failed: ' . $e->getMessage());
            //dd($e->getMessage()); // or return response()->json(['error' => $e->getMessage()]);
        }    
        
        return redirect()->back()->with('success', 'Enquiry submitted successfully');
    }

    private function getValidationRules($formName)
    {
        switch ($formName) {
            case 'contact':
                return [
                    'form_name' => 'required|max:20',
                    'name' => 'required|string|max:50',
                    'phone' => 'nullable|digits_between:10,15|max:50',
                    'email' => 'required|email|max:50',
                    'message' => 'nullable|string|max:150'
                ];

            case 'enrolments':
                return [
                    'form_name'        => 'required|max:20',
                    'name'             => 'required|string|max:50',
                    'phone'            => 'digits_between:10,15',
                    'email'            => 'required|email|max:50',
                    'course'           => 'nullable|string|max:150',
                    'course_category'  => 'nullable|string|max:150',
                ];

            case 'bmi_calculator':
                return [
                    'form_name' => 'required|max:20',
                    'name' => 'required|string|max:50',
                    'phone' => 'nullable|digits_between:10,15|max:50',
                    'email' => 'nullable|email|max:50',
                    'gender' => 'nullable|string|max:10',
                    'age' => 'nullable|numeric|min:1|max:120',
                    'weight' => 'nullable|numeric|min:1|max:300',
                    'height' => 'nullable|numeric|min:1|max:300',
                    'medical_history' => 'nullable|array',
                    'medical_other' => 'nullable|string|max:255',
                    'bmi_value' => 'nullable|numeric',
                    'bmi_status' => 'nullable|string|max:50'
                ];

            default:
                return [
                    'form_name' => 'required|max:20',
                ];
        }
    }
}