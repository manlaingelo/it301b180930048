<?php

class TodoListsSeeder extends Seeder{
    public function run(){
        DB::table('todolists')->delete();
        $todolists=array(
            array(
                'title'=>'Дасгал хийх'
                ,'status'=>'Хийсэн'
            )
        );
        DB::table('todolists')->insert($todolists);
    }
}