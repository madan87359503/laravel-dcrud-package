<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Schema;

class Models extends Model {

    public function __construct() {
        
    }

    protected $table = 'models';

    use SoftDeletes;

    protected $fillable = [
        "name", "table", "publish", "version", "code", "dashboard", "showCrud"
    ];
    public static $access = array(
        0 => '1',
    );
    public static $pType = ['dashboard' => 'no', 'showCrud' => 'yes'];
    public static $modelData = [
        "id" => "",
        "name" => "", "table" => "", "publish" => "", "version" => "", "code" => "", "dashboard" => "", "showCrud" => ""
    ];
    public static $tabHeadsG = ["id", "name", "table", "publish", "version", "code", "dashboard", 'showCrud'];
    public static $formDataG = ["name", "table", "publish", "version", "code", "dashboard", 'showCrud'];
    public static $validator = [
        "name" => "required|max:191", "table" => "required|max:191", "publish" => "required|max:191", "version" => "required|max:191", "code" => ""
    ];
    public static $formType = array(
        'showCrud' =>
        array(
            'id' => 42,
            'created_at' => '2021-08-30T12:26:21.000000Z',
            'updated_at' => '2021-08-30T12:26:21.000000Z',
            'deleted_at' => NULL,
            'models_name' => '12',
            'name' => 'id',
            'createvalidator' => 'required|max:191',
            'updatevalidator' => 'required|max:191',
            'type' => 'text',
            'modeldata' => 'Yes',
            'tablehead' => true,
            'formdata' => 'Yes',
            'fillable' => 'Yes',
            'formclass' => 'col-lg-4'
        ), 'dashboard' =>
        array(
            'id' => 42,
            'created_at' => '2021-08-30T12:26:21.000000Z',
            'updated_at' => '2021-08-30T12:26:21.000000Z',
            'deleted_at' => NULL,
            'models_name' => '12',
            'name' => 'id',
            'createvalidator' => 'required|max:191',
            'updatevalidator' => 'required|max:191',
            'type' => 'text',
            'modeldata' => 'Yes',
            'tablehead' => true,
            'formdata' => 'Yes',
            'fillable' => 'Yes',
            'formclass' => 'col-lg-4'
        ), 'code' =>
        array(
            'id' => 42,
            'created_at' => '2021-08-30T12:26:21.000000Z',
            'updated_at' => '2021-08-30T12:26:21.000000Z',
            'deleted_at' => NULL,
            'models_name' => '12',
            'name' => 'id',
            'createvalidator' => 'required|max:191',
            'updatevalidator' => 'required|max:191',
            'type' => 'textarea',
            'modeldata' => 'Yes',
            'tablehead' => 0,
            'formdata' => 'Yes',
            'fillable' => 'Yes',
            'formclass' => 'col-lg-12'
        ), 'version' =>
        array(
            'id' => 42,
            'created_at' => '2021-08-30T12:26:21.000000Z',
            'updated_at' => '2021-08-30T12:26:21.000000Z',
            'deleted_at' => NULL,
            'models_name' => '12',
            'name' => 'id',
            'createvalidator' => 'required|max:191',
            'updatevalidator' => 'required|max:191',
            'type' => 'text',
            'modeldata' => 'Yes',
            'tablehead' => true,
            'formdata' => 'Yes',
            'fillable' => 'Yes',
            'formclass' => 'col-lg-3'
        ), 'publish' =>
        array(
            'id' => 42,
            'created_at' => '2021-08-30T12:26:21.000000Z',
            'updated_at' => '2021-08-30T12:26:21.000000Z',
            'deleted_at' => NULL,
            'models_name' => '12',
            'name' => 'id',
            'createvalidator' => 'required|max:191',
            'updatevalidator' => 'required|max:191',
            'type' => 'text',
            'modeldata' => 'Yes',
            'tablehead' => true,
            'formdata' => 'Yes',
            'fillable' => 'Yes',
            'formclass' => 'col-lg-3'
        ), 'table' =>
        array(
            'id' => 42,
            'created_at' => '2021-08-30T12:26:21.000000Z',
            'updated_at' => '2021-08-30T12:26:21.000000Z',
            'deleted_at' => NULL,
            'models_name' => '12',
            'name' => 'id',
            'createvalidator' => 'required|max:191',
            'updatevalidator' => 'required|max:191',
            'type' => 'text',
            'modeldata' => 'Yes',
            'tablehead' => true,
            'formdata' => 'Yes',
            'fillable' => 'Yes',
            'formclass' => 'col-lg-3'
        ),
        'name' =>
        array(
            'id' => 42,
            'created_at' => '2021-08-30T12:26:21.000000Z',
            'updated_at' => '2021-08-30T12:26:21.000000Z',
            'deleted_at' => NULL,
            'models_name' => '12',
            'name' => 'id',
            'createvalidator' => 'required|max:191',
            'updatevalidator' => 'required|max:191',
            'type' => 'text',
            'modeldata' => 'Yes',
            'tablehead' => true,
            'formdata' => 'Yes',
            'fillable' => 'Yes',
            'formclass' => 'col-lg-3',
    'sortale' => NULL,
    'searchableforms' => true,
        ), 'id' =>
        array(
            'id' => 42,
            'created_at' => '2021-08-30T12:26:21.000000Z',
            'updated_at' => '2021-08-30T12:26:21.000000Z',
            'deleted_at' => NULL,
            'models_name' => '12',
            'name' => 'id',
            'createvalidator' => 'required|max:191',
            'updatevalidator' => 'required|max:191',
            'type' => 'text',
            'modeldata' => 'Yes',
            'tablehead' => false,
            'formdata' => 'Yes',
            'fillable' => 'Yes',
            'formclass' => 'col-lg-4'
    ));
    public static $subModules = ['forms' => 'models_name', 'actions' => 'models_name', 'submodules' => 'models_name', 'rolemodel' => 'models_name'];
    public static $actions = [
        'publish' => [
            'name' => 'Publish',
            'namerev' => 'Publish Again',
            'bclass' => 'btn-success',
            'bclassrev' => 'btn-warning',
            'update' => 'publish=published,deleted_at=null,afterupdate=generateModel',
            'updaterev' => 'publish=published,deleted_at=null,afterupdate=generateModel',
            'state' => 'no',
            'reverse' => 'true',
        ],
        'dashboard' => [
            'name' => 'Disable',
            'namerev' => 'Enable',
            'bclass' => 'btn-warning',
            'bclassrev' => 'btn-success',
            'update' => 'dashboard=no',
            'updaterev' => 'dashboard=yes',
            'state' => 'yes',
            'reverse' => 'true',
        ],
        'showCrud' => [
            'name' => 'Enable',
            'namerev' => 'Disable',
            'bclass' => 'btn-success',
            'bclassrev' => 'btn-warning',
            'update' => 'showCrud=yes',
            'updaterev' => 'showCrud=no',
            'state' => 'no',
            'reverse' => 'true',
        ]
    ];

    public static function getSelectData() {
        $options = '';

        return $options;
    }

    public static function generateModel($id) {

        $actions = [];
        $option = '';
        $m = Models::findOrFail($id);
        $smd = Models::pluck('name')->all();
        $f = Forms::where('models_name', $m->id)->pluck('name', 'id')->toArray();
        $ft = collect(Forms::where('models_name', $m->id)->get()->toArray())->keyBy('name')->toArray();
        $va = Forms::where('models_name', $m->id)->pluck('createvalidator', 'name')->toArray();
        $acc = Rolemodel::where('models_name', $m->id)->pluck('role_name')->all();
        $sm = Submodules::where('models_name', $m->id)->pluck('name', 'filter')->toArray();
        $act = Actions::where('models_name', $m->id)->select('name', 'btnclass as bclass', 'onupdate as update', 'state', 'reverse', 'namerev', 'bclassrev', 'updaterev', 'forms_name')->get();
        foreach ($act as $a) {
            $fn = Forms::whereId($a->forms_name)->first()->name;
            $a->reverse == 1 ? $a->reverse = 'true' : $a->reverse = 'false';
            $actions[$fn] = $a->toArray();
        }

        $opt = Forms::where('models_name', $m->id)->get();
        foreach ($opt as $c) {
            Models::checkCol($m->attributes['table'], $c->name, $ft[$c->name]['type']);

            if ($c->options == '')
                continue;
            $option .= '$options["' . $c->name . '"]=' . $c->options . ';';
        }
        $o = $option;
        $c = implode(',', $f);
        $model = '';
        $model = File::get(base_path() . '/buildTemplate/model');
        $model = str_replace('%Table%', ucfirst($m->name), $model);
        $model = str_replace('%table%', $m->attributes['table'], $model);
        $model = str_replace('%relation%', '', $model);
        $model = str_replace('%fillable%', '"' . str_replace(',', '","', $c) . '"', $model);
        $model = str_replace('%fillablea%', '"' . str_replace(',', '"=>"","', $c) . '"=>""', $model);
        $model = str_replace('%submodule%', var_export($sm, true), $model);
        $model = str_replace('%action%', var_export($actions, true), $model);
        $model = str_replace('%options%', $o, $model);
        $model = str_replace('%fillablev%', var_export($va, true), $model);
        $model = str_replace('%access%', var_export($acc, true), $model);
        $model = str_replace('%ptype%', "['dashboard'=>'$m->dashboard','showCrud'=>'$m->showCrud']", $model);
        $model = str_replace('%code%', $m->code, $model);
        $model = str_replace('%formType%', var_export($ft, true), $model);

        File::put(base_path() . '/app/Models/' . ucfirst($m->name) . '.php', $model);
    }

    public static function checkCol($t, $co, $ty) {
        if (!Schema::hasTable($t)) {
            Schema::create($t, function ($table) {
                $table->increments('id');
                $table->timestamps();
                $table->softDeletes();
            });
        }
        if ($co == 'id')
            return;

        if (!Schema::hasColumn($t, $co)) {
            Schema::table($t, function ($table) use ($co, $ty) {

                switch ($ty) {
                    case 'switch':
                        $table->boolean($co)->nullable();
                        break;
                    case 'text':
                        $table->string($co)->nullable();
                        break;
                    case 'editorjs':
                        $table->longText($co)->nullable();
                        break;
                    case 'select':
                        $table->string($co)->nullable();
                        break;
                    default:
                        $table->mediumText($co)->nullable();
                }
            });
        } else {


            Schema::table($t, function ($table) use ($co, $ty) {

                switch ($ty) {
                    case 'switch':
                        $table->boolean($co)->change();
                        break;
                    case 'text':
                        $table->string($co)->change()->nullable();
                        break;
                    case 'editorjs':
                        $table->longText($co)->change();
                        break;
                    case 'select':
                        $table->string($co)->change()->nullable();
                        break;
                    default:
                        $table->mediumText($co)->change()->nullable();
                }
            });
        }
    }

}
