<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssociazioneRequest extends FormRequest
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
       $rules =  [
               "nome" => ["required","max_character:".BambiniGratisController::LIMIT_TESTO],
               ];  

       return $rules;

       }

   public function messages() 
       {
       $messages =  [
               "note.max_character" => "Il campo note può contenere al massimo ".BambiniGratisController::LIMIT_TESTO." caratteri",
               "note.offer_message_spam" => "Il testo dell'offferta NON deve contenere INDIRIZZI EMAIL, INDIRIZZI INTERNET o NUMERI DI TELEFONO",
               ];
        return $messages;
       }
}
