<?php

namespace Pontian\TaxMaster;

use Pontian\TaxMaster\Models\Tax;

trait TaxHelper
{
    public function calculate($taxes, $amount): \Illuminate\Support\Collection
    {
        $tax_collection = collect();
        $sum_of_current_selected_taxes = 0;
        $is_vat_present = false;
        foreach ($taxes as $selected_tax_id)
        {
            $tax = Tax::find($selected_tax_id);

            if (!is_null($tax)){
                if($tax->name !== 'VAT')
                {
                    $new_tax_amount = ($amount * $tax->percentage) / 100;

                    $sum_of_current_selected_taxes += $new_tax_amount;

                    $tax_collection->push([$tax->name => $new_tax_amount]);
                }
                else{
                    $is_vat_present = true;
                }
            }
        }

        if($is_vat_present)
        {
            $vat_tax = Tax::where('name', 'VAT')->first();
            $new_tax_amount = (($amount + $sum_of_current_selected_taxes) * $vat_tax->percentage) / 100;
            $tax_collection->push([$vat_tax->name => $new_tax_amount]);
        }
        return $tax_collection;
    }
}
