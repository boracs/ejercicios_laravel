<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function coment_date($days_ago=0){
        return "the coment was day ago: $days_ago";
    }
    public function coment_day_with_letter($id){
            return "el id es $id";
    }
}
