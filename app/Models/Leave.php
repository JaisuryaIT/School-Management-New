<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = ['teacher_id', 'leave_type', 'fromdate', 'todate', 'reason'];
    public function teacher()
    {
        return $this->belongsTo(TeachersBio::class, 'teacher_id', 'id');
    }
}
