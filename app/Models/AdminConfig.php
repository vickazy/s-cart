<?php
#app/Models/AdminConfig.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminConfig extends Model
{
    public $timestamps = false;
    public $table = SC_DB_PREFIX.'admin_config';
    protected static $getAll = null;
    protected $connection = SC_CONNECTION;

/**
 * [getExtensionsGroup description]
 * @param  [type]  $group      [description]
 * @param  boolean $onlyActive [description]
 * @return [type]              [description]
 */
    public static function getExtensionsGroup($group, $onlyActive = true)
    {
        $return = self::where('code', $group);
        if ($onlyActive) {
            $return = $return->where('value', 1);
        }
        $return = $return->orderBy('sort', 'asc')
            ->get()->keyBy('key');
        return $return;
    }

    public static function getAll()
    {
        if (self::$getAll == null) {
            self::$getAll = self::pluck('value', 'key')->all();
        }
        return self::$getAll;
    }

}
