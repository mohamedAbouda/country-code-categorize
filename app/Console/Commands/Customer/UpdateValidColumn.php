<?php

namespace App\Console\Commands\Customer;

use App\Models\Customer;
use Illuminate\Console\Command;

class UpdateValidColumn extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customers:update-valid-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Valid status according to phone number';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Customer::chunk(200, function ($customers) {
            foreach ($customers as $customer) {
                $customer->update([
                    'is_valid' => (int) $customer->state
                ]);
            }
        });
        return Command::SUCCESS;
    }
}
