<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Action;
use DB;
use App\Document;
use App\Http\Repositories\DocumentRepository;
use Validator;
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
       return $this->DocumentRepository->Documentindex();
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
        $this->DocumentRepository->update($id,$request->all());
        return $this->show($id);
    }

    public function edit($id)
    {
        return vieW('document.edit')->with('data', $this->DocumentRepository->getOne($id));
    }

    public function show($id)
    {
        return $this->DocumentRepository->ShowDocument($id);
    }

    public function AddDocument(Request $request,$id)
    {
        $this->DocumentRepository->AddDocument($id,$request);
        return redirect('/document/'.$id);
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
