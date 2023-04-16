<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Forum;
use App\Models\Reply;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ==========================================
        // |  Create 100 users
        // | ----------------------------------------
        $defaultPerms = Role::create(['name' => 'Default']); // Spatie's Permission
        $users = [];
        for ($x = 0; $x <= 100; $x++) {
          $defaultUser = User::factory()->create();
          $defaultUser->assignRole($defaultPerms);
          $users[] = $defaultUser;
        }

        // ==========================================
        // |  Create forums
        // | ----------------------------------------
        $forums = [];
        for ($x = 0; $x <= 1000; $x++) {
            $user = $users[array_rand($users)];
            $forums[] = Forum::factory()->create([
                'user_id' => $user->id,
            ]);
        }


        // Legacy Code
        // User::factory(50)->has(
        //     Forum::factory()->has(
        //         Comment::factory()->has(
        //             Reply::factory()->count(2)
        //         )->count(3)
        //     )->count(2)
        // )->create();
    }
}
