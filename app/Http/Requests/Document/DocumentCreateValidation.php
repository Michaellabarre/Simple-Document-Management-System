<?php

namespace App\Http\Requests\Document;

use Illuminate\Foundation\Http\FormRequest;

class DocumentCreateValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->sanitize();
        return [
            'doc_date'  => 'required',
            'subject'  => 'required',
            'import_file'  =>'mimes:pdf'
        ];
    }

    public function sanitize()
    {
        $input = $this->all();
        $input['subject'] = strip_tags($input['subject']);
        $this->replace($input);     
    }
}
