<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{

    protected $moduleName;
    protected $folderName;
    protected $routeName;

    public function __construct()
    {
        $this->moduleName = 'Forms';
        $this->folderName = 'forms';
        $this->routeName = 'forms';
        view()->share('moduleName', $this->moduleName);
        view()->share('folderName', $this->folderName);
        view()->share('routeName', $this->routeName);
    }

    public function index(Request $request, $form_name = null)
    {

        // Get the search parameter from the request
        $companyId = request()->input('company');
        $search = request()->input('search');

        $query = Form::query();
        if($form_name){
            $query->where('form_name', $form_name);
        }

        // Filter by authenticated user's company_id if available
        if (auth()->user()->company_id) {
            $query->where('company_id', auth()->user()->company_id);
        }
    
        // Additional filtering by request input (optional)
        if ($companyId) {
            $query->where('company_id', $companyId);
        }        

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%')
                  ->orWhere('phone', 'like', '%' . $search . '%');
            });
        }

        $pageData = $query->orderBy('created_at', 'desc')->paginate(config('custom.pagination_per_page'));

        //dd($pageData);

        $formNames = Form::select('form_name')->distinct()->pluck('form_name');

        // Get dropdown data for companies
        $companyList = getCompanyList();        

        return view('backend.' . $this->folderName . '.index', compact('pageData', 'companyList', 'formNames'));
    }
}
