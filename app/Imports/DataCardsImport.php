<?php

namespace App\Imports;

use App\Models\DataCard;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Exception;

HeadingRowFormatter::default('none');

class DataCardsImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {   
        try{

            $data =  new DataCard([
                'name'                          => $row['Nome_Carta'],
                'type'                          => $row['Tipo'],
                'color'                         => $row['Colore'],
                'cost'                          => $row['Costo'],
                'color_cost'                    => NULL,
                'colorless_cost'                => NULL,
                'total_cost'                    => NULL,
                'attack'                        => NULL,
                'defense'                       => NULL,
                'f_c'                           => $row['F_C'],
                'description'                   => $row['Testo'],
                'set'                           => $row['Set'],
                'to_be_evaluated'               => NULL,
                'to_be_evaluated_in_which_deck' => NULL,
                'comment'                       => NULL,
                'price'                         => NULL,
                'expansion'                     => NULL,
                'cod_carta'                     => $row['Cod_Carta'],
                'name_en'                       => $row['English']
            ]);

            session()->flash('alert-success','Sheet has been Updated Successfuly');
            return $data;

        }catch(Exception $exception){

            session()->flash('alert-danger','Error while Updating Sheet. Make sure you have updated correct data');
            return null;

        }

    }
}
