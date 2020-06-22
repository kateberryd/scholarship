<?php

namespace App\Repositories\Credential;

use App\Repositories\Credential\CredentialContract;
use App\Credential;
use Sentinel;

class EloquentCredentialRepository implements CredentialContract {

    //

    public function findAll() {
        $credentials = Credential::all();
        return $credentials;
       
      }

    public function create($request){
       
            $credential = new credential;
            if ($request->hasFile('passport')) {
                $image = $request->file('passport');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/passports');
                $image->move($destinationPath, $filename);  

                $credential->passport = $filename;
            }

                $prefix = "UW";
                $str = str_pad( Sentinel::getUser()->id + 3, 5, "00");
                $currentDate = date('Y');
                $extractDate = substr($currentDate, 2, 3);
                
    
            if($request->state_exam === 'lagos'){
                $code = $prefix . $str .$extractDate . "L";
            }
            elseif($request->state_exam === 'abuja'){
                $code = $prefix . $str .$extractDate . "FCT";
            }
            elseif($request->state_exam === 'imo'){
                $code = $prefix . $str .$extractDate . "O";
            }
            elseif($request->state_exam === 'plateau'){
                $code = $prefix . $str .$extractDate . "PL";
            }
            elseif($request->state_exam === 'oyo'){
                $code = $prefix . $str .$extractDate . "I";
            }
            elseif($request->state_exam === 'rivers'){
                $code = $prefix . $str .$extractDate . "R";
            }
            elseif($request->state_exam === 'jalingo'){
                $code = $prefix . $str .$extractDate . "T";
            }
            elseif($request->state_exam === 'uyo'){
                $code = $prefix . $str .$extractDate . "A";
            }
            elseif($request->state_exam === 'kano'){
                $code = $prefix . $str .$extractDate . "kano";
            }
    
    
            $credential->school_name = $request->school_name;
            $credential->school_address = $request->school_address;
            $credential->school_state = $request->school_state;
            $credential->expected_date_of_graduation = $request->expected_date_of_graduation;
            $credential->type_of_result = $request->type_of_result;
            $credential->exam_year = $request->exam_year;
            $credential->subject_one = $request->subject_one;
            $credential->grade_one = $request->grade_one;
            $credential->subject_two = $request->subject_two;
            $credential->grade_two = $request->grade_two;
            $credential->subject_three = $request->subject_three;
            $credential->grade_three = $request->grade_three;
            $credential->subject_four = $request->subject_four;
            $credential->grade_four = $request->grade_four;
            $credential->subject_five = $request->subject_five;
            $credential->grade_five = $request->grade_five;
            $credential->subject_six = $request->subject_six;
            $credential->grade_six = $request->grade_six;
            $credential->courses = $request->courses;
            $credential->state_exam = $request->state_exam;
            $credential->completed = 1;
            $credential->present_level = $request->present_level;
            $credential->enrolment_status = $request->enrolment_status;
            $credential->present_cgpa = $request->present_cgpa;
            $credential->program_of_study = $request->program_of_study;
            $credential->unique_code = $code;
            $credential->user_id = Sentinel::getUser()->id;
            $credential->subject_combination = serialize($request->subject_combination);
            $credential->save();
            return $credential;

    }


    

    public function findById($id) {
        $user= Credential::find($id);
        return $user;
      }
    


    public function update($request, $id){
        $credential =  $this->findById($id);

        if ($request->hasFile('passport')) {
            $image = $request->file('passport');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/passports');
            $image->move($destinationPath, $filename);  
            $credential->passport = $filename;
       
           
        }

            $prefix = "UW";
            $str = str_pad( Sentinel::getUser()->id + 3, 5, "00");
            $currentDate = date('Y');
            $extractDate = substr($currentDate, 2, 3);
            
           

            

        if($request->state_exam === 'lagos'){
            $code = $prefix . $str .$extractDate . "L";
        }
        elseif($request->state_exam === 'abuja'){
            $code = $prefix . $str .$extractDate . "FCT";
        }
        elseif($request->state_exam === 'imo'){
            $code = $prefix . $str .$extractDate . "O";
        }
        elseif($request->state_exam === 'plateau'){
            $code = $prefix . $str .$extractDate . "PL";
        }
        elseif($request->state_exam === 'oyo'){
            $code = $prefix . $str .$extractDate . "I";
        }
        elseif($request->state_exam === 'rivers'){
            $code = $prefix . $str .$extractDate . "R";
        }
        elseif($request->state_exam === 'jalingo'){
            $code = $prefix . $str .$extractDate . "T";
        }
        elseif($request->state_exam === 'uyo'){
            $code = $prefix . $str .$extractDate . "A";
        }
        elseif($request->state_exam === 'kano'){
            $code = $prefix . $str .$extractDate . "kano";
        }

        $credential->school_name = $request->school_name;
        $credential->school_address = $request->school_address;
        $credential->school_state = $request->school_state;
        $credential->expected_date_of_graduation = $request->expected_date_of_graduation;
        $credential->type_of_result = $request->type_of_result;
        $credential->exam_year = $request->exam_year;
        $credential->subject_one = $request->subject_one;
        $credential->grade_one = $request->grade_one;
        $credential->subject_two = $request->subject_two;
        $credential->grade_two = $request->grade_two;
        $credential->subject_three = $request->subject_three;
        $credential->grade_three = $request->grade_three;
        $credential->subject_four = $request->subject_four;
        $credential->grade_four = $request->grade_four;
        $credential->subject_five = $request->subject_five;
        $credential->grade_five = $request->grade_five;
        $credential->subject_six = $request->subject_six;
        $credential->grade_six = $request->grade_six;
        $credential->courses = $request->courses;
        $credential->state_exam = $request->state_exam;
        $credential->present_level = $request->present_level;
        $credential->enrolment_status = $request->enrolment_status;
        $credential->present_cgpa = $request->present_cgpa;
        $credential->unique_code = $code;
        $credential->completed = 1;
        $credential->user_id = Sentinel::getUser()->id;
        $credential->subject_combination = serialize($request->subject_combination);
        $credential->save();
        return $credential;
    }
}
