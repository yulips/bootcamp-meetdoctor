<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'permission_role';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function role(){
        return $this->belongsTo('app\Models\ManagementAccess\Role.php', 'role_id', 'id');
    }

    public function permission(){
        return $this->hasMany('app\Models\ManagementAccess\Permission.php', 'permission_id');
    }
}
