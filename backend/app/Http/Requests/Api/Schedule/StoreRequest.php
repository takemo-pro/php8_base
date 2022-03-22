<?php

namespace App\Http\Requests\Api\Schedule;

use App\Enums\TrainingType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class StoreRequest extends FormRequest
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
            'reserve_time' => 'required|date_format:Y-m-d H:i:s|after:today',
            'training_type' => [
                'required',
                new Enum(TrainingType::class),
            ],
            'set_number' => "nullable|integer|numeric",
            'set_time_sec' => "nullable|integer|numeric",
        ];
    }
}

