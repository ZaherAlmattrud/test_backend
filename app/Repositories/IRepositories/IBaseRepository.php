<?php

namespace App\Repositories\IRepositories;

use Illuminate\Http\Request;

interface IBaseRepository
{

    public function index(); 

    public function store( $collection = [] );

    public function show($id);

    public function update($id , $collection = [] );

    public function destroy($id);

}