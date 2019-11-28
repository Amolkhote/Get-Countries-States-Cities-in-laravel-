<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class country_state_city extends Controller
{


          // Getting Country
         function getcountry()
        {
              $country = DB::Select('SELECT `id`, `name` FROM `countries`');
              if(count($country)===0)
              {
                return back()->withErrors('Country Data Not Found');
              }else {
                return view('user.user_register', ['country_data'=>$country]);
              }
        }


        // Getting States
         function getstate($countrycode)
        {
          $state_list = DB::Select('SELECT `id`, `name` FROM `states` WHERE country_id=?',[$countrycode]);
          if (count($state_list)===0) {
            return back()->withErrors('State Data Not Found');
          }else {
              echo'<option value="0">-- Select State -- </option>';
            foreach ($state_list as $state_name) {
              echo'<option value="'.$state_name->id.'">'.$state_name->name.'</option>';
            }
          }
        }

        //Getting city
         function getcity($stateId)
        {
          $city_list = DB::select('SELECT `id`, `name` FROM `cities` WHERE state_id=?',[$stateId]);
          if(count($city_list)===0)
          {
            return back()->withErrors('City Data Not Found');
          }
          else {
            echo'<option value="0">-- Select City -- </option>';
            foreach ($city_list as $city_data) {
              echo'<option value="'.$city_data->id.'">'.$city_data->name.'</option>';
            }
          }
        }
      }
