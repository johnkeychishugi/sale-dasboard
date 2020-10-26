<?php

namespace App\Http\Livewire;

use App\Service\Stats;
use Livewire\Component;

class SalesDashboard extends Component
{
	
    public function render()
    {
        return view('livewire.sales-dashboard',[
			'newOrders' => Stats::newOrders(),
			'saleAmount' => Stats::saleAmount(),
			'satisfactions' => Stats::satisfactions()
        ]);
    }

}
