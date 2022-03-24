<?php

namespace App\Http\Requests\Api\Training;

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
            'trainings' => 'required|array',
            'trainings.*.training_menu_id' => 'required|integer|numeric',
            'trainings.*.reserve_time' => 'required|date_format:Y-m-d H:i:s|after:today',
            'trainings.*.success_flag' => "required|boolean",
            'trainings.*.set_count' => "nullable|integer|numeric",
            'trainings.*.actual_count' => "required|integer|numeric",
            'trainings.*.actual_time_ms' => "required|numeric",
        ];
    }
}

