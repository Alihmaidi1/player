<?php

namespace App\repo\interfaces;

interface special{


    public function getAllSpecial();

    public function store($request);
    public function delete($id);
    public function find($id);
    public function update($request);
}
