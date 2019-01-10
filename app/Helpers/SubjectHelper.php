<?php
/**
 * Created by PhpStorm.
 * User: ducthien
 * Date: 07/01/2019
 * Time: 19:22
 */

namespace App\Helpers;
use App\Models\Subject;

class SubjectHelper
{
    public static function getIdOfSubject($IdSubject) {
        $getId = Subject::findOrFail($IdSubject);

        return $getId;
    }
}
