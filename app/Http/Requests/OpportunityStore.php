<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\HTTP\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class OpportunityStore extends FormRequest
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
        return [
            //
            'title'=>'required|string|max:255',
            'description'=>'required',
            'categoryId'=>'required|numeric',
            'countryId'=>'required|numeric',
            'deadline'=>'required|date',
             'organizer'=>'required|string|max:255',
              'createdBy'=>'required|numeric',
        ];
    }

    protected function failedValidation(Validator $validator){
         
         throw new HttpResponseException(response()->json([
         'errors'=>$validator->errors()
         ],422));
        
    }
}
