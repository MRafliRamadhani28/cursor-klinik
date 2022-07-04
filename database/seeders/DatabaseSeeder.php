<?php

namespace Database\Seeders;

use App\Models\Fitur;
use App\Models\FiturDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call([UsersTableSeeder::class]);

    $fitur_dtls = [
      [
        'id'        => 1,
        'name'      => 'View Role',
        'fitur_id'  => 1,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'id'        => 2,
        'name'      => 'Create Role',
        'fitur_id'  => 1,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'id'        => 3,
        'name'      => 'Update Role',
        'fitur_id'  => 1,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'id'        => 4,
        'name'      => 'Delete Role',
        'fitur_id'  => 1,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'id'        => 5,
        'name'      => 'View Obat',
        'fitur_id'  => 2,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'id'        => 6,
        'name'      => 'Create Obat',
        'fitur_id'  => 2,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'id'        => 7,
        'name'      => 'Update Obat',
        'fitur_id'  => 2,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'id'        => 8,
        'name'      => 'Delete Obat',
        'fitur_id'  => 2,
        'created_at' => now(),
        'updated_at' => now()
      ]
    ];

    foreach ($fitur_dtls as $dtls) {
      FiturDetail::create([
        'id'          => $dtls['id'],
        'name'        => $dtls['name'],
        'fitur_id'    => $dtls['fitur_id'],
        'created_at'  => $dtls['created_at'],
        'updated_at'  => $dtls['updated_at']
      ]);
    }


    $fiturs = [
      [
        'id'        => 1,
        'name'      => 'Manage Role',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'id'        => 2,
        'name'      => 'Manage Obat',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'id'        => 3,
        'name'      => 'Report',
        'created_at' => now(),
        'updated_at' => now()
      ]
    ];

    foreach ($fiturs as $fitur) {
      Fitur::create([
        'id'          => $fitur['id'],
        'name'        => $fitur['name'],
        'created_at'  => $fitur['created_at'],
        'updated_at'  => $fitur['updated_at']
      ]);
    }
  }
}
