<?php

namespace Database\Seeders;

use App\Models\Aprovprim;
use App\Models\Aprovsec;
use App\Models\Asignacion;
use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Nota;
use App\Models\Trimestre;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Pest\Laravel\call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(GestionSeeder::class);
        $this->call(NivelSeeder::class);
        $this->call(GradosSeeder::class);
        $this->call(DatosSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(AsignacionSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(NotaSeeder::class);
        $this->call(TrimestreSeeder::class);
        $this->call(AprovprimSeeder::class);
        $this->call(AprovsecSeeder::class);
    }
}
