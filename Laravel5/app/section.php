<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model {
	//protected $primaryKey = ['courseNum','sectionNum'];

	public function scopeCompositeKey($query, $course_num, $section){
		return $query -> where('courseNum', 'like', $course_num) -> where('sectionNum', 'like', $section);
	}

}
