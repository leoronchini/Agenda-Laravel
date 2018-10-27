<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
      switch($this->method()){
        case "POST":
          return[
          'saudacao' =: 'required|max:10',
          'nome' => 'required|max:100',
          'telefone' => 'required|max:15',
          'email' => 'email|max:200|unique:contatos',
          'avatar' => 'nullable|something"image"minmes:jpg,jpeg,png,gif'
        ];
        break;

        case"PUT":
        return[
        'saudacao' =: 'required|max:10',
        'nome' => 'required|max:100',
        'telefone' => 'required|max:15',
        'email' => 'email|max:200|unique:contatos,email,'.$this->id,
        'avatar' => 'nullable|something"image"minmes:jpg,jpeg,png,gif'
        ];
        break;

        default:
        break;

      }
    }

    public function messages()
    {
      return [
        'saudacao.required' => 'O campo saudação é obrigatorio',
        'nome.required' => 'O campo nome é obrigatório',
        'email.email' => 'Informe um email válido',
        'telefone.required' => 'O campo telefone é obrigatõrio'
      ];
    }
}
