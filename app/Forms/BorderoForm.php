<?php

namespace App\Forms;

use App\Banco;
use App\Carteira;
use App\Projeto;
use App\TipoRecebivel;
use App\UtilizacaoDeRecurso;
use Kris\LaravelFormBuilder\Form;


class BorderoForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('pro_id', 'entity', [
                'class' => Projeto::class,
                'property' => 'pro_nome',
                'label' => 'Projeto',
                'attr' => ['placeholder' => '--Escolha um Projeto--']
            ])
            ->add('bco_id', 'entity', [
                'class' => Banco::class,
                'property' => 'bco_nome',
                'label' => 'Portador',
                'attr' => ['placeholder' => '--Escolha um Portador--']
            ])
            ->add('car_id', 'entity', [
                'class' => Carteira::class,
                'property' => 'car_nome',
                'label' => 'Carteira',
                'attr' => ['placeholder' => '--Escolha uma Carteira--']
            ])
            //->add('tir_id', 'select')
            ->add('tir_id', 'entity', [
                'class' => TipoRecebivel::class,
                'property' => 'tir_nome',
                'label' => 'Tipo Recebivel',
                'attr' => ['placeholder' => '--Escolha um Tipo--']
            ])
            //->add('url_id', 'select')
            ->add('url_id', 'entity', [
                'class' => UtilizacaoDeRecurso::class,
                'property' => 'url_nome',
                'label' => 'Utilização do Recurso',
                'attr' => ['placeholder' => '--Escolha uma Opção--']
            ])
            ->add('bor_dataope', 'date', [
                'label' => 'Data da Operação'
            ])
            ->add('bor_numero', 'number', [
                'label' => 'Numero do Bordero',
                'default_value' => '0',
            ])
            ->add('bor_qtd_tit', 'number', [
                'label' => 'Quantidade de Titulos',
                'default_value' => '0'
            ])

            ->add('bor_qt_recusada', 'number', [
                'label' => 'Quantidade Recusada',
                'default_value' => '0'
            ])
            ->add('bor_qtd_final', 'number', [
                'label' => 'Total de Titulos',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
            ])
            ->add('bor_vlr_bruto', 'number', [
                'label' => 'Valor Bruto do Bordero',
                'default_value' => '0'
            ])

            ->add('bor_vlr_bruto_recusado', 'number', [
                'label' => 'Valor Bruto Recusado',
                'default_value' => '0',
            ])

            ->add('bor_vlr_bruto_final', 'number', [
                'label' => 'Valor Bruto Final',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
            ])
            ->add('bor_vlr_tot_tarifas', 'number', [
                'label' => 'Total das Tarifas',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
            ])
            ->add('bor_vlr_liquido', 'number', [
                'label' => 'Valor Liquido Bordero',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
            ])
            ->add('bor_vlr_liq_correto', 'number', [
                'label' => 'Valor Liquido Calculado',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
            ])
            ->add('bor_chk_liq', 'number', [
                'label' => 'Diferença Valor Liquido',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
            ])
            ->add('bor_status', 'text',[
                'label'=>'Status de Diferença',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Status', 'disabled'],
                ])

//            ->add('bor_status', 'choice', [
//                'label' => 'Status de Diferença',
//                'choices' => ['OK' => 'OK', 'dif' => 'Diferença'],
//                'choice_options' => [
//                    'wrapper' => ['class' => 'choice-wrapper'],
//                    'label_attr' => ['class' => 'label-class'],
//                ],
//                'selected' => ['OK', 'dif'],
//                'expanded' => false,
//                'multiple' => false,
//            ])
            ->add('bor_dt_cred', 'date', [
                'label' => 'Data Credito'])

            ->add('bor_cst_com_iof', 'number', [
                'label' => 'Custo Efetivo Acordado',
                'default_value' => '0'
            ])
            ->add('bor_pz_med_emp', 'number', [
                'label' => 'Prazo Méd. Pond. Emp.',
                'default_value' => '0'
            ])
            ->add('bor_pz_med_bco', 'number', [
                'label' => 'Prazo Méd. Pond. Banco',
                'default_value' => '0'
            ])

            ->add('bor_float_acordado', 'number', [
                'label' => 'Float Acordado',
                'default_value' => '0'
            ])

            ->add('bor_float_calc', 'number', [
                'label' => 'Float Calculado',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
                ])


            ->add('bor_float_dif', 'number', [
                'label' => 'Diferença Float',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
                ])


            ->add('bor_chk_iof', 'number', [
                'label' => 'Checagem IOF',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
                ])

            ->add('bor_tx_empresa', 'number', [
                'label' => 'Custo Efetivo Prazo Médio Com Float Acordado',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
                ])


            ->add('bor_cst_efetivo', 'number', [
                'label' => 'Custo Efetivo Prazo Médio',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
                ])

            ->add('bor_recompra', 'number', [
                'label' => 'Recompra',
                'default_value'=>'0',
            ])

            ->add('bor_retencao', 'number', [
                'label' => 'Retenção',
                'default_value'=>'0'
            ])

            ->add('bor_fomento', 'number', [
                'label' => 'Valor Desc. do Liq. para Fomento',
                'default_value'=>'0',
                'label_attr' => ['class' => 'control-label', 'for' => $this->name],
            ])

            ->add('bor_per_outros', 'number', [
                'label' => 'Outros Custos Fora da Operação',
                'default_value'=>'0'
            ])

            ->add('bor_taxa_acordado', 'number', [
                'label' => 'Taxa Acordada'])

            ->add('bor_liq_recebido', 'number', [
                'label' => 'Valor Liquido Recebido',
                'tag' => 'div', // Tag to be used for holding static data,
                'attr' => ['class' => 'form-control', 'placeholder' => '0', 'disabled'],
                ])

            ->add('submit', 'submit', [
                'label'=> 'Salvar',
                'attr' => [
                    'class' => 'btn btn-primary btn-block'
                ]
            ]);
    }
}
