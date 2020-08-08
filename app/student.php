<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = "student_register";
    protected $fillable= [
    "reg_idIndex",
    "name",
    "abridged_name",
    "call_name",
    "first_name",
    "last_name",
    "gender",
    "dob",
    "nationality",
    "religion_id",
    "academic_session_id",
    "academic_grade_id",
    "previous_school_name",
    "image",
    "mobile_phone",
    "email",
    "facebook",
    "linkedin",
    "family_idIndex",
    "status_id",
    "sibling_no",
    "active_sibling_no",
    "card_codeIndex",
    "created",
    "register_by",
    "modified",
    "modified_by",
    "record_deleted"
    ];
}
