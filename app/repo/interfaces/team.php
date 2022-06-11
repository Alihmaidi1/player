<?php
namespace App\repo\interfaces;

interface team{



    public function getAllTeam();
    public function store($request);
    public function delete($id);
    public function find($id);
    public function update($request);
    public function paginate($number);
    public function player($id);

}

