<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'giggity:goo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is a test. Giggity giggity goo!';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        return Command::SUCCESS;
    }
}
