<?php
namespace App\Http\Repositories;
use Illuminate\Support\Facades\Auth;
use App\Http\Repositories\Common\Eloquent\CommonEloquent;
use Illuminate\Support\Facades\Redirect;
use App\Payroll;
use App\Item;
use Illuminate\Support\Facades\Input;
use Request as Req;
use Response;
use Excel;
use App\Payrolltype;
use Validator;
use App\Employee;
use Illuminate\Support\Facades\Storage;
use File;

class PayrollRepository extends CommonEloquent {
    
    function __construct(Payroll $model) {
        $this->model = $model;  
    }

    public function Payrollindex()
    {
        $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
        $data = $this->model->orderBy('id', 'desc')->paginate(10);
        return view('payroll.list', compact('data','Payrolltypes'));
    }

    public function CreatePayroll($request)
    {
        $param = Req::all();
        $ppmp = Payroll::create($param);

        return $this->Payrollindex();
    }

    public function downloadform()
    {
        $file_path = storage_path('excel') . "/" . 'payrollformat.xlsx';
        if (file_exists($file_path)) {
            return Response::download($file_path);
        }
        return Redirect::back()->with('message','File not found');
    }

    public function Downloadexceldata($title)
    {
        $file_path = storage_path('app/files') . "/" . $title ."/".$title.'.'.'xlsx';
        if (file_exists($file_path)) {
            return Response::download($file_path);
        }
        return Redirect::back()->with('message','File not found');
    }

    public function downloadcsv($title=0,$request)
    {
        if($title=="0"){
            $title = $request->session()->get('title');
            $file= storage_path('app/temp_csv'). "/".$title.".csv";
        }else{
            $file= storage_path('app/files'). "/".$title."/".$title.".csv";
        }

        if (file_exists($file)) {
            $headers = array( 'Content-Type' => 'text/csv');
            return Response::download($file, 'payrollcsv'.'.csv', $headers);
        }
        return Redirect::back()->with('message','File not found');
    }

    public function downloadmanucsv($title=[],$request)
    {
        if($title=="0"){
            $title = $request->session()->get('title');
            $file= storage_path('app/temp_csv'). "/".$title.".txt";
        }else{
            $file= storage_path('app/files'). "/".$title."/".$title.".txt";
        }

        if (file_exists($file)) {
            $headers = array( 'Content-Type' => 'text/csv');
            return Response::download($file, 'manupayrollcsv'.'.txt', $headers);
        }
        return Redirect::back()->with('message','File not found');
    }

    public function importexcel($request)
    {
        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();

            //$data = Excel::selectSheetsByIndex(0)->filter('chunk')->load($path)->chunk(100, function($results){});
           
            $data = Excel::selectSheetsByIndex(0)->skipColumns(1)->load($path, function($reader) {})->ignoreEmpty()->formatDates(false)->get();
            //return dd($data);
           //return dd($data);

            $title=$data[5]['title'];

            $file = request()->file('import_file');
            $extension = $file->getClientOriginalExtension();

            Storage::disk('local')->put('temp_excelfile/'.$title.'.'.$extension,  File::get($file));
            if(!empty($data) && $data->count()){
                $fp = fopen(storage_path('app/temp_csv'). "/" . $title .'.'.'csv', "w");
                $fpmanu = fopen(storage_path('app/temp_csv'). "/" . $title .'.'.'txt', "w");

                foreach ($data as $key => $value) {
                    $lbp_account = trim($value->lbpaccount, "()'\" ");
                    $emp_id = trim($value->employee_number, "()'\" ");
                    
                    $sample = array($lbp_account,$value->netamount,$value->rate_per_month,$value->subsistence_allowance,$value->laundry_allowance,$value->gross_amount,$value->hazard_pay,$value->gsis,$value->philhealth,$value->health_card,$value->doe_ea,$value->hdmf,$value->withholding_tax,$value->pera,$value->salary,$value->provident_share,$value->others1,$value->others2,$value->bonus_differential);

                    $result = Employee::where('employee_id', '=', $emp_id)->where('account_number', '=',$lbp_account)->count();
                    
                    $checkaccount = Employee::where('employee_id', '=', $emp_id)->orwhere('account_number',$lbp_account)->count();

                    $checkempid = Employee::where('employee_id', '=', $emp_id)->count();

                    if(!empty($value->lbpaccount)  && $this->Isnumeric($sample,'is_numeric') && $result){

                        if (strpos($value->netamount, ".") !== false) {
                            $ins_netval= number_format($value->netamount, 2, '.',',');
                        }else{
                            $ins_netval =number_format($value->netamount, 2, '.',',');
                        }
                        $insert[] = [
                            'lbpaccount' => stripslashes($this->setWhiteSpaces($value->lbpaccount, "0", 10, "right")), 
                            'employee_number' => $value->employee_number,
                            'firstname' => $value->firstname, 
                            'lastname' => $value->lastname, 
                            'netamount' => $ins_netval,
                            'rate_per_month'=> $value->rate_per_month,
                            'subsistence_allowance'=> $value->subsistence_allowance,
                            'laundry_allowance'=> $value->laundry_allowance,
                            'gross_amount'=> $value->gross_amount,
                            'hazard_pay'=> $value->hazard_pay,
                            'gsis'=> $value->gsis,
                            'philhealth'=> $value->philhealth,
                            'health_card'=> $value->health_card,
                            'doe_ea'=> $value->doe_ea,
                            'hdmf'=> $value->hdmf,
                            'withholding_tax'=> $value->withholding_tax,
                            'pera'=> $value->pera,
                            'salary'=> $value->salary,
                            'bonus_differential'=> $value->bonus_differential,
                            'provident_share'=> $value->provident_share,
                            'others1'=> $value->others1,
                            'others2'=> $value->others2,
                        ];

                        if (strpos($value->netamount, ".") !== false) {
                            $netval= $this->setWhiteSpaces(str_replace(".", "",number_format($value->netamount, 2, '.','')  ), "0", 15, "right")."\r\n";
                        }else{
                            $netval =  $this->setWhiteSpaces(str_replace(".", "", $value->netamount."00"), "0", 15, "right")."\r\n"; 
                        }

                        $fullname = $value->lastname ." ". str_replace(",", "",$value->firstname);
                        $data = $this->setWhiteSpaces($value->lbpaccount, "0", 10, "right") . ", ";
                        $data = $data . $this->setWhiteSpaces($fullname, " ", 40, "left") . ", ";
                        $data = $data . $netval ;

                        $datamanu = $value->employee_number. "\t";
                        $datamanu = $datamanu .$value->lastname. "\t";
                        $datamanu = $datamanu .$value->firstname. "\t";
                        $datamanu = $datamanu .$value->gross_amount. "\t";
                        $datamanu = $datamanu .$value->gsis. "\t";
                        $datamanu = $datamanu .$value->philhealth. "\t";
                        $datamanu = $datamanu .$value->health_card. "\t";
                        $datamanu = $datamanu .$value->doe_ea. "\t";
                        $datamanu = $datamanu .$value->hdmf. "\t";
                        $datamanu = $datamanu .$value->withholding_tax. "\t";
                        $datamanu = $datamanu .$value->netamount."\r\n";
                        fwrite($fp,$data);
                        fwrite($fpmanu,$datamanu);
                    }else{
                        if (empty($checkaccount) &&  strtoupper($value->lastname) != 'LASTNAME' && !empty($value->firstname) && !empty($value->lastname) && is_numeric($value->netamount)) {
                            $first_error[] = [
                                'lbpaccount' => (!empty($value->lbpaccount)) ? $value->lbpaccount : '', 
                                'employee_number' => (!empty($value->employee_number)) ? $value->employee_number : '',
                                'firstname' => (!empty($value->firstname)) ? $value->firstname : '', 
                                'lastname' => (!empty($value->lastname)) ? $value->lastname  : '', 
                                'netamount' => (is_numeric($value->netamount)) ? number_format($value->netamount, 2, '.',',')  : '0'
                            ];
                        }
                        if(!$this->Isnumeric($sample,'is_numeric') && !empty($value->firstname) && !empty($value->lastname) &&  strtoupper($value->lastname) != 'LASTNAME'){
                            $second_error[] = [
                                'lbpaccount' => (!empty($value->lbpaccount)) ? $value->lbpaccount : '', 
                                'employee_number' => (!empty($value->employee_number)) ? $value->employee_number : '',
                                'firstname' => (!empty($value->firstname)) ? $value->firstname : '', 
                                'lastname' => (!empty($value->lastname)) ? $value->lastname  : '', 
                                'netamount' => (is_numeric($value->netamount)) ? number_format($value->netamount, 2, '.',',')  : '0'
                            ];
                        }
                        if (!empty($checkaccount)   &&  strtoupper($value->lastname) != 'LASTNAME' && !empty($value->firstname) && !empty($value->lastname) && $this->Isnumeric($sample,'is_numeric')) {
                            $third_error[] = [
                                'lbpaccount' => (!empty($value->lbpaccount)) ? $value->lbpaccount : '', 
                                'employee_number' => (!empty($value->employee_number)) ? $value->employee_number : '',
                                'firstname' => (!empty($value->firstname)) ? $value->firstname : '', 
                                'lastname' => (!empty($value->lastname)) ? $value->lastname  : '', 
                                'netamount' => (is_numeric($value->netamount)) ? number_format($value->netamount, 2, '.',',')  : '0'
                            ];
                        }
                    }
                }
                fclose($fp);
                fclose($fpmanu);
                if(!empty($insert)){
                    $data = array_filter(array_map('array_filter', $insert));
                }else{
                   $data=[]; 
                }
                $request->session()->put('csvdata',$data);
                $request->session()->put('title',$title);
            }
        }
        $Payrolltypes = Payrolltype::select('payrolltype', 'id')->where('isactive',1)->get();
        return view('payroll.create', compact('data','title','Payrolltypes','first_error','second_error','third_error'));
    }

    public function searchPayroll($request=[])
    {
        $keyword = $request->input('search');
        $payrolltype = $request->input('fund_id');
        $model = new $this->model;
        $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
        if ($payrolltype == 0){
            $data = $model::where('payee','LIKE',"%{$keyword}%")
            ->orderBy('id', 'desc')
            ->paginate(10);
            return view('payroll.list', compact('data','Payrolltypes'));
        }
        $data = $model::where('payee','LIKE',"%{$keyword}%")
            ->where('fund_id',$payrolltype)
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('payroll.list', compact('data','Payrolltypes'));
    }

    public static function setWhiteSpaces($val, $space, $length, $align)
    {
        $retVal = "";
        if ($align == "left")
            $retVal = $val;
        for ($i = 0; $i < ($length - iconv_strlen ($val)); $i++) {
            $retVal = $retVal . $space;
        }
        if ($align == "right")
            $retVal = $retVal . $val;
        return $retVal;
    }


    public function UpdatePayroll($id,$param=[])
    {
        $param = Req::all();
        $this->update($id,$param);
        return $this->Payrollindex();
    }

    public function Isnumeric($array, $predicate) {
        return array_filter($array, $predicate) === $array;
    }
}       