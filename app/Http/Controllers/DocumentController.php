<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Item;
use DB;
use App\Document;
use App\Payrolltype;
use App\Http\Repositories\DocumentRepository;
use Validator;
use Request as Req;
use App\Http\Requests\Document\DocumentCreateValidation;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    protected $model;
    protected $DocumentRepository;

    public function __construct(DocumentRepository $DocumentRepository,Document $model)
    {
        $this->model = $model;
        $this->DocumentRepository = $DocumentRepository;
    }

    public function index()
    {
       return view('document.create');
    }

    public function create()
    {
        return view('document.create');
    }

    public function store(DocumentCreateValidation $request)
    {
        return $this->DocumentRepository->CreateDocument($request);
    }

    public function update(Request $request, $id)
    {
        return $this->DepositeRepository->UpdateDeposit($id,$request);
    }

    public function edit($id)
    {
        
        return view('document.edit');
    }

    public function show($id)
    {
        // $user = Auth::user()->first_name;
        // $id = Auth::id();
        //return var_dump($id);
        return $this->DocumentRepository->ShowDocument($id);
    }

    public function AddDocument(Request $request,$id)
    {
    
        return $this->DocumentRepository->AddDocument($id,$request);

    }

    public function AddAction(Request $request,$id)
    {
    
        return $this->DocumentRepository->AddAction($id,$request);
    }

    public function searchDeposit(Request $request)
    {
        return $this->DepositeRepository->searchDeposit($request);
    }
}
