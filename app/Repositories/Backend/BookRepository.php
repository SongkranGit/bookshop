<?php
/**
 * Created by PhpStorm.
 * User: berm-mac
 * Date: 17/12/2017 AD
 * Time: 13:33
 */

namespace App\Repositories\Backend;


use App\Repositories\BaseRepository;

class BookRepository extends BaseRepository
{

    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        // TODO: Implement model() method.
        return Book::class;
    }




}