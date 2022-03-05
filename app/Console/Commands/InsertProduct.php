<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class InsertProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert products into table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $product = new Product();
        $product->nombre = "".date("Y-m-d H:i:s");
        $product->descripcion = "DESC";
        $product->precio = rand(100, 500);
        $product->estado = "".rand(0, 1);
        $product->save();
    }
}
