<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function createTaskWithNewDestination($param)
    {
        $result = [];
        foreach(['customer_id', 'address', 'landmark', 'zip_code', 'city', 'state', 'country'] as $field){
            if(isset($param[$field]) && strlen($param[$field])>0){
                $result['destination'][$field] = $param[$field]; }
        }
        
        if(
          isset($param['locationLatitude']) && strlen($param['locationLatitude'])>0 &&
          isset($param['locationLongitude']) && strlen($param['locationLongitude'])>0
        ){
            $result['destination']['location'] = [
                'type' => 'Point', 'coordinates' => [
                    floatval($param['locationLatitude']),
                    floatval($param['locationLongitude'])
                ] ];
        }
        foreach(['action', 'order_id', 'committed_eta'] as $field){
            if(isset($param[$field]) && strlen($param[$field])>0){
                $result[$field] = $param[$field]; }
        }

        return json_encode($result);
    }

    public static function updateDestinationLocation($param)
    {
        $result = [];
        if(
          isset($param['locationLatitude']) && strlen($param['locationLatitude'])>0 &&
          isset($param['locationLongitude']) && strlen($param['locationLongitude'])>0
        ){
            $result['location'] = [
                'type' => 'Point', 'coordinates' => [
                    floatval($param['locationLatitude']),
                    floatval($param['locationLongitude'])
                ] ];
        }

        return json_encode($result);
    }

    public static function createDestination($param)
    {
        $result = [];
        foreach(['customer_id', 'address', 'landmark', 'zip_code', 'city', 'state', 'country'] as $field){
            if(isset($param[$field]) && strlen($param[$field])>0){
                $result[$field] = $param[$field]; }
        }
    
        if(
          isset($param['locationLatitude']) && strlen($param['locationLatitude'])>0 &&
          isset($param['locationLongitude']) && strlen($param['locationLongitude'])>0
        ){
            $result['location'] = [
                'type' => 'Point', 'coordinates' => [
                    floatval($param['locationLatitude']),
                    floatval($param['locationLongitude'])
                ] ];
        }

        return json_encode($result);
    }

    public static function updateDestination($param)
    {
        return self::createDestination($param);
    }

    public static function createGPSLog($param)
    {
        $result = [];
        foreach(['driver_id', 'recorded_at', 'location_accuracy', 'speed', 'bearing', 'altitude', 'activities', 'activity_confidence'] as $field){
            if(isset($param[$field]) && strlen($param[$field])>0){
                $result[$field] = $param[$field]; }
        }

        if(
          isset($param['locationLatitude']) && strlen($param['locationLatitude'])>0 &&
          isset($param['locationLongitude']) && strlen($param['locationLongitude'])>0
        ){
            $result['location'] = [
                'type' => 'Point', 'coordinates' => [
                    floatval($param['locationLatitude']),
                    floatval($param['locationLongitude'])
                ] ];
        }

        return json_encode($result);
    }
    
    public static function createBulkGPSLogs($param)
    {
        $result = $param['gpsLogObjectsList'];
        return json_encode($result);
    }
}