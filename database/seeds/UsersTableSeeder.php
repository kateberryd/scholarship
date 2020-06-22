<?php

use Illuminate\Database\Seeder;
// use Sentinel;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      $superAdminCredentials = [
        'first_name' => 'Super',
        'last_name' => 'Admin',
        'email' => 'superadmin@glomode.ng',
        'username' => 'superadmin',
        'password' => 'secret',
        'user_role' => 'superadmin',
        'slug' => 'super-admin',
      ];
      
      $superAdmin = Sentinel::registerAndActivate($superAdminCredentials, true);
      $role = Sentinel::findRoleBySlug('superadmin');
      $role->users()->attach($superAdmin);
      
      $adminCredentials = [
        'first_name' => 'Admin',
        'last_name' => 'Admin',
        'email' => 'admin@glomode.ng',
        'username' => 'admin',
        'password' => 'secret',
        'user_role' => 'admin',
        'slug' => 'admin'      
      ];
    
      $admin = Sentinel::registerAndActivate($adminCredentials, true);
      $role = Sentinel::findRoleBySlug('admin');
      $role->users()->attach($admin);
      
      $userCredentials = [
        'first_name' => 'Kate',
        'last_name' => 'Author',
        'email' => 'user@glomode.ng',
        'username' => 'author',
        'user_role' => 'author',
        'password' => 'secret',
        'slug' => 'nani-user',
      ];
      
      $user = Sentinel::registerAndActivate($userCredentials, true);
      $role = Sentinel::findRoleBySlug('author');
      $role->users()->attach($user);
  
      $userCredentials = [
        'first_name' => 'kate',
        'last_name' => 'Moderator',
        'email' => 'moderator@glomode.ng',
        'username' => 'moderator',
        'user_role' => 'moderator',
        'password' => 'secret',
        'slug' => 'moderator',
      ];
      
      $user = Sentinel::registerAndActivate($userCredentials, true);
      $role = Sentinel::findRoleBySlug('moderator');
      $role->users()->attach($user);
    }
}
