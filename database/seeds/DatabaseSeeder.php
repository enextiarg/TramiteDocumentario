<?php

use App\Models\Customer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Administrador del sistema'
        ]);

        $id_customer = Role::create([
            'name' => 'customer',
            'display_name' => 'Cliente',
            'description' => 'Cliente final'
        ]);

        $id_reception = Role::create([
            'name' => 'reception',
            'display_name' => 'Recepción',
            'description' => 'Recepción de Documentos'
        ]);

        $id_user = User::create([
            'name' => 'jperez',
            'email' => 'jperez@ogmail.com',
            'password' => bcrypt('123456'),
            'firstname' => 'Juan Carlos',
            'lastname' => 'Perez Soza',
            'document' => '12345678'
        ]);

        $id_admin_user = User::create([
            'name' => 'admin',
            'email' => 'admin@ogmail.com',
            'password' => bcrypt('123456'),
            'firstname' => 'Admi',
            'lastname' => 'Nistrador',
            'document' => '00000000'
        ]);

        $id_admin_user->attachRole($id_admin);
        $id_user->attachRole($id_customer);


        $customer = Customer::create([
            'firstname' => 'Juan Carlos',
            'lastname' => 'Perez Soza',
            'document' => '12345678'
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
