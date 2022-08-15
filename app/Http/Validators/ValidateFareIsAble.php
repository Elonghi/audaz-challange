<?php

namespace App\Http\Validators;
use App\Models\FareAsOperator;
use App\Models\Fare;

class ValidateFareIsAble
{

    public function Validate($operatorId, $value) {

        $validator = FareAsOperator::where('operator_id', $operatorId)
                                ->join('fare', 'fare_as_operator.fare_id', '=', 'fare.id')
                                ->where('fare.value', $value)
                                ->where('fare.isActive', 1)
                                ->where('fare_as_operator.created_at', '>=', date('Y-m-d H:i:s', strtotime('-6 months')))
                                ->get();
        
        return count($validator) == 0 ? true : false;
    }

}

?>