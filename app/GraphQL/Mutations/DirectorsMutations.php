<?php

namespace App\GraphQL\Mutations;


use App\Models\Director;

class DirectorsMutations{

    public function create($root , array $args){
       return $direc = Director::create($args);
    }
    public function update($root,array $args){
        $d=$args['id'];
        $director = Director::where('id',$d)
        ->update(['name'=> $args['name'],'lastname'=> $args['lastname']]);
        // Verifica que el objeto Director tenga valores válidos antes de devolverlo
        return $director=Director::find($d);
    }
    public function delete($root,array $args){
        $d=$args['id'];
        return Director::find($d)->delete();
        //return response()->json('Eliminacion Existosa');
    }
}