<?php

namespace App\Http\Requests\Basic;

use App\Models\Basic\Section\Section;
use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required'],
            'url_address'=>['required'],
            'counting_number' => ['required',\Illuminate\Validation\Rule::unique(Section::class, 'counting_number')->ignore($this->id) , 'digits:7'],
            'user_id_create'=>['Numeric'],
            'user_id_update'=>['Numeric'],
        ];
    }

     protected function prepareForValidation()
    {
        $this->mergeIfMissing(['url_address' => $this->get_random_string(60)]);
        //add user_id base on route
         if (request()->routeIs('section.store')) { 
            $this->mergeIfMissing(['user_id_create' => auth()->user()->id ]);

         }elseif(request()->routeIs('section.update')) 
        {
            $this->mergeIfMissing(['user_id_update' =>  auth()->user()->id ]);
        
        }

    }

    function get_random_string($length)
    {
      $array = array(0,1,2,3,4,5,6,7,8,9, 'a', 'b','c' , 'd', 'e', 'f','g', 'h', 'i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
      $text = "";
      $length = rand(22, $length);

      for($i=0;$i<$length;$i++) {
         $random = rand(0,61);
         $text .=$array[$random];
        }
      return $text;
    }

}
