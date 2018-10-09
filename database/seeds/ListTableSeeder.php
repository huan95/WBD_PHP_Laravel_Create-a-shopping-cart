<?php

use Illuminate\Database\Seeder;

class ListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = new \App\Lists();
        $list->name = 'Sản phẩm 001';
        $list->description = 'Sản phẩm có mã số 001.';
        $list->price = 1.5;
        $list->view_count = 0;
        $list->save();

        $list = new \App\Lists();
        $list->name = 'Sản phẩm 002';
        $list->description = 'Sản phẩm có mã số 002.';
        $list->price = 2.5;
        $list->view_count = 0;
        $list->save();

        $list = new \App\Lists();
        $list->name = 'Sản phẩm 003';
        $list->description = 'Sản phẩm có mã số 003.';
        $list->price = 1.5;
        $list->view_count = 0;
        $list->save();
    }
}
