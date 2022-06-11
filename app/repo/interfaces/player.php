<?php

namespace App\repo\interfaces;


interface player{


    public function getAllPlayer();
    public function store($request);
    public function delete($id);
    public function find($id);
    public function update($request);

}
