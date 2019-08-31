<?php

namespace App\Forms;
use App\TarifaBancaria;
use Kris\LaravelFormBuilder\Form;

class TarifaBorderoForm extends Form
{

    public function buildForm()
    {
        $this
            ->add('tar_id', 'entity', [
                'class' => TarifaBancaria::class,
                'property' => 'tar_desc',
                'label' => 'Tarifa',
                'attr' => ['placeholder' => '--Escolha uma Tarifa--']
            ])

            ->add('tab_valor', 'number', [
                'label' => 'Valor',
                'default_value'=>'0'
            ]);
    }
}
