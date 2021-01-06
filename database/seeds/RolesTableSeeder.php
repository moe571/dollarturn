<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        // Create Admin Role
        $admin = new Role();
        $admin->name = "admin";
        $admin->display_name = "Admin";
        $admin->save();

        // Editor Role
        $editor = new Role();
        $editor->name = "editor";
        $editor->display_name = "Editor";
        $editor->save();

        // Create Author Role

        $author = new Role();
        $author->name = "author";
        $author->display_name = "Author";
        $author->save();

        // Attach the roles

        // first user as Admin
        $user1 = User::find(1);
        $user1->detachRole($admin);
        $user1->attachRole($admin);
        // second user as Editor
        $user2 = User::find(2);
        $user2->detachRole($editor);
        $user2->attachRole($editor);

        // third user as Author
        $user3 = User::find(3);
        $user3->detachRole($author);
        $user3->attachRole($author);


    }
}
