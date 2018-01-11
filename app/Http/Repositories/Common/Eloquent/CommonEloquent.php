<?php
namespace App\Http\Repositories\Common\Eloquent;

use Illuminate\Database\Eloquent\Model;
class CommonEloquent
{
    protected $model;

    function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function getOne($id, $with = [])
    {
        return $this->model->with($with)->findOrFail($id);
    }

    /**
     * @param  int    $id
     * @param  array  $attr
     * @return array
     */
    public function update($id, $attr = [])
    {
        $model = $this->model->findOrFail($id);
        $model->fill(filter_var_array($attr,FILTER_SANITIZE_STRING));
        $model->save();
    }

    /**
     * @param  array  $attr
     * @return array
     */
    public function save($attr = [])
    {
        $model = new $this->model;
        $model->fill(filter_var_array($attr,FILTER_SANITIZE_STRING));
        $model->save();
        return $model;
    }

    /**
     * @param  integer $id
     */
    public function delete($id)
    {
        $this->model->destroy($id);
    }


    public function createdataVue($param = [])
    {
        $model = new $this->model;
        $model->fill(filter_var_array($param,FILTER_SANITIZE_STRING));
        $model->save();
        return response()
            ->json([
                'created' => true,
                'id' => $model->id
            ]
        );  
    }

    public function updatedataVue($id, $param = [])
    {
        $model = $this->model->findOrFail($id);
        $model->fill(filter_var_array($param,FILTER_SANITIZE_STRING));
        $model->save();
        return response()->json([
                'updated' => true,
                'id' => $model->id
            ]
        );
    }

    public function dropdownlist($tablename,$listname,$uuid)
    {
        $selectdata = $tablename::pluck($listname, $uuid)->take(1000);
        return response()->json($selectdata);
    }
}
