<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function defalut($param, &$blockCustom, $vendorUrl){}

    public static function getRealTimeExchangeRates($param) {
        if (is_array($param['currencies'])) {
            $param['currencies'] = implode(',', $param['currencies']);
        }
        return json_encode($param);
    }

    public static function getHistoricalExchangeRate($param) {
        $date = new \DateTime($param['date']);
        if ($date) {
            $param['date'] = $date->format('Y-m-d');
        }
        return json_encode($param);
    }

    public static function getCurrenciesChanges($param) {
        $startDate = new \DateTime($param['start_date']);
        $endDate = new \DateTime($param['end_date']);
        if ($startDate) {
            $param['start_date'] = $startDate->format('Y-m-d');
        }
        if ($endDate) {
            $param['end_date'] = $endDate->format('Y-m-d');
        }
        if (is_array($param['currencies']))  {
            $param['currencies'] = implode(',', $param['currencies']);
        }

        return json_encode($param);
    }
}