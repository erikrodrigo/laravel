<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Pendiente extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pendiente:ordenes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Anula ordenes pendientes';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $schedule->call(function () {

            $hora = now()->subMinute(15);

            $orders = Order::where('status', 1)->whereTime('created_at', '<=', $hora)->get();

            foreach ($orders as $order) {

                $items = json_decode($order->content);

                foreach ($items as $item) {
                    increase($item);
                }

                $order->status = 5;

                $order->save();
            }

        })->everyMinute();
    }
}
