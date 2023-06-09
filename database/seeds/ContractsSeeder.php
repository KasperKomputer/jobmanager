<?php


use App\Models\Contracts;
use Illuminate\Database\Seeder;
class ContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $contract = [
            'Dostawcy',
            'Farmacja',
            'Farmacja umowy',
            'Indywidualni',
            'Medycyna',
            'Medycyna umowa',
            'Przedsiębiorstwa',
            'Przedsiębiorstwa umw',
                ];

        foreach($contract as $id => $contracts)
        Contracts::create(['contract_name' => $contracts,     
    ]);
    }
}
