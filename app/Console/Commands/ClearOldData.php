<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ClearOldData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:old-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menghapus data setelah 2 hari';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dataLama = Carbon::now()->subDays(2);
        DB::table('bms_data')
            ->where('created_at', '<', $dataLama)
            ->delete();

        DB::table('bms_mggr')
            ->where('created_at', '<', $dataLama)
            ->delete();

        $this->info('Data telah dihapus');
    }
}
