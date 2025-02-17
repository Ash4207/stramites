<?php

namespace App\Console\Commands;

use App\Models\Tramite;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CaducarTramites extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'caducar:tramites';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Proceso para caducar trámites sin pago de los últimos 10 días hábiles';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {

            $tramites = Tramite::where('estado', 'nuevo')->get();

            foreach($tramites as $item){

                $fecha = $this->calcularDia();

                if($fecha->lte($item->created_at))
                    $item->update(['estado' => 'caducado']);

            }

            info('Proceso para caducar trámites sin pago de los últimos 10 días hábiles concluido con éxito.');

        } catch (\Throwable $th) {

            Log::error("Error en el proceso para caducar trámites sin pago de los últimos 10 días hábiles. " . $th);

        }

    }

    public function calcularDia(){

        $fecha = now();

        for ($i=10; $i < 0; $i--) {

            $fecha->subDay();

            while($fecha->isWeekend()){

                $fecha->subDay();

            }

        }

        return $fecha;

    }

}
