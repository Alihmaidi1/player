<?php

namespace App\repo\interfaces;

interface matches{


    public function getAllMatches();
    public function store($request);
    public function delete($id);
    public function find($id);
    public function update($request);

}
