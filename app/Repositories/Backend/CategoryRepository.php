<?php
/**
 * Created by PhpStorm.
 * User: berm-mac
 * Date: 17/12/2017 AD
 * Time: 13:36
 */

namespace App\Repositories\Backend;


use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository
{

    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return Category::class;
    }


}