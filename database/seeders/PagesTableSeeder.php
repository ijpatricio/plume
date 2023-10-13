<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            
            array (
                'id' => 1,
                'title' => 'my portfolio',
                'slug' => 'my-portfolio',
                'layout' => 'default',
                'blocks' => '[{"type":"hero","data":{"name":"Patricio","introduction":"Foo bla bla bla"}}]',
                'parent_id' => NULL,
                'created_at' => '2023-09-22 20:03:26',
                'updated_at' => '2023-09-22 20:03:26',
            ),
            
            array (
                'id' => 2,
                'title' => 'Daniel',
                'slug' => 'daniel',
                'layout' => 'default',
                'blocks' => '[{"type":"hero","data":{"name":"Daniel","introduction":"Daniel, the man!!"}},{"type":"social-link","data":{"link":"Example.com","handle":"DanielHe4rt","social":"twitter"}}]',
                'parent_id' => NULL,
                'created_at' => '2023-10-13 17:29:17',
                'updated_at' => '2023-10-13 17:29:17',
            ),
        ));
        
        
    }
}