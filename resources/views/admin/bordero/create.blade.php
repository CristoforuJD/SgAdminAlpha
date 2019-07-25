@extends ('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row" style="padding-left: 15px">
        <h2>Cadastrar Bordero</h2>
    </div>
@endsection
<style>

</style>
@section('content')
    {!! form_start($form) !!}



    <div class="box box-body box-info" style=" margin-top: -25px;">
        <div class="col-md-12 justify-content-between">
            {{--            PRIMEIRA LINHA--}}
            <div class="row">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">
                        <label style=" ">Projeto</label>
                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">
                            {!! form_widget($form->pro_id) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-3 justify-content-between" style="padding: 0px;">
                        <label style=" " >Data Op.</label>
                    </div>
                    <div class=" col-md-9">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_dataope) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-6">
                        <label style=" ">Numero Bor.</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_numero) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-3">
                        <label style=" ">Data Crédito</label>
                    </div>
                    <div class=" col-md-9">
                        <div class="form-group-sm ">
                            {!! form_widget($form->bor_dt_cred) !!}

                        </div>
                    </div>

                </div>

            </div>
            {{--            SEGUNDA LINHA--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">
                        <label style=" ">Portador</label>
                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">
                            {!! form_widget($form->bco_id) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7 justify-content-between" style="padding: 0px;">
                        <label style=" ">Qtd.Títulos</label>
                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_qtd_tit) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label style=" ">Vlr Bruto Bordero</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_bruto) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-6">
                        <label style=" ">Custo Efet. Acordado</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_cst_com_iof) !!}

                        </div>
                    </div>

                </div>

            </div>

            {{--            Terceira Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">
                        <label style=" ">Carteira</label>
                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">
                            {!! form_widget($form->car_id) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7" style="padding-left: 1px; padding-right: 1px">
                        <label style=" ">Qtd.Recusada</label>
                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_qt_recusada) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label style=" ">Vlr Bruto Recusado</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_bruto_recusado) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7">
                        <label style=" ">Prazo Médio Pond. Emp.</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_pz_med_emp) !!}

                        </div>
                    </div>

                </div>

            </div>
            {{--            QUarta Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">
                        <label style=" ">Tipo Recebível</label>
                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">
                            {!! form_widget($form->tir_id) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7" style="padding-left: 1px;">
                        <label style=" ">Qtd.Final</label>
                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_qtd_final) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label style=" ">Vlr Bruto Final</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_bruto_final) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7">
                        <label style=" ">Prazo Médio Pond. Banco</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_pz_med_bco) !!}

                        </div>
                    </div>

                </div>

            </div>

            {{--            QUinta Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">
                        <label style=" ">Utilização Recurso</label>
                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">
                            {!! form_widget($form->url_id) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4" style="padding-left: 1px;">

                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm">


                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-6">
                        <label style=" ">Valor Total Tarifas</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_tot_tarifas) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-6">
                        <label style=" ">Float Acordado</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_float_acordado) !!}

                        </div>
                    </div>

                </div>

            </div>

            {{--            Sexta Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4">

                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm ">


                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-4" style="padding-left: 1px;">

                    </div>
                    <div class=" col-md-8">
                        <div class="form-group-sm">


                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label style=" ">Valor Liquido</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_liquido) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-6">
                        <label style=" ">Float Calculado</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_float_calc) !!}

                        </div>
                    </div>

                </div>

            </div>
            {{--            Sétima Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-4 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7">
                        <label style=" ">Custo Efetivo Pz Med c/ Float Acordado</label>
                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm ">
                            {!! form_widget($form->bor_tx_empresa) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-5 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5" style="padding-left: 1px;">
                        <label>Valor Liquido Correto</label>
                    </div>
                    <div class=" col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_vlr_liq_correto) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label>Diferença Float</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_float_dif) !!}

                        </div>
                    </div>

                </div>


            </div>
            {{--            Oitava Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-4 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7">
                        <label>Custo Efetivo Prazo Médio</label>
                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm ">
                            {!! form_widget($form->bor_cst_efetivo) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-5 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5" style="padding-left: 1px;">
                        <label>Diferença Calculo Valor Liquido</label>
                    </div>
                    <div class=" col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_chk_liq) !!}

                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">
                        <label>Checagem IOF</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_chk_iof) !!}

                        </div>
                    </div>

                </div>


            </div>
            {{--            Nona Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-4 justify-content-between" style="padding: 0px;">

                    <div class="col-md-7">

                    </div>
                    <div class=" col-md-5">
                        <div class="form-group-sm ">

                        </div>
                    </div>

                </div>
                <div class="col-md-5 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5" style="padding-left: 1px;">
                        <label>Status</label>
                    </div>
                    <div class=" col-md-7">
                        <div class="form-group-sm">
                            {!! form_widget($form->bor_status) !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style="padding: 0px;">

                    <div class="col-md-5">

                    </div>
                    <div class="col-md-7">
                        <div class="form-group-sm">


                        </div>
                    </div>

                </div>


            </div>
            <br>
            {{--            Décima Linha--}}
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">

                <div class="col-md-3 justify-content-between" style="">

                    <div class="row" style="padding-bottom: 2px">
                        <div class="col-md-5">
                            <label>Recompra</label>
                        </div>
                        <div class=" col-md-7">
                            <div class="form-group-sm ">
                                {!! form_widget($form->bor_recompra) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 2px">
                        <div class="col-md-5">
                            <label>
                                Fomento
                            </label>
                        </div>
                        <div class=" col-md-7">
                            <div class="form-group-sm ">
                                {!! form_widget($form->bor_fomento) !!}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 justify-content-between" style=" padding-left: 10px">

                    <div class="row" style="padding-bottom: 2px">
                        <div class="col-md-5">
                            <label>Retenção</label>
                        </div>
                        <div class=" col-md-7">
                            <div class="form-group-sm ">
                                {!! form_widget($form->bor_retencao) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 2px">
                        <div class="col-md-5">
                            <label>
                                Outros
                            </label>
                        </div>
                        <div class=" col-md-7">
                            <div class="form-group-sm ">
                                {!! form_widget($form->bor_per_outros) !!}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 justify-content-between" style="padding-left: 10px">

                    <div class="col-md-5">
                        <label style="font-size: medium">Valor Liquido Recebido</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group-lg">
                            {!! form_widget($form->bor_liq_recebido) !!}

                        </div>
                    </div>

                </div>


            </div>




            <div class="btn-group col-md-12">
                {!! form_widget($form->submit) !!}
            </div>
        </div>

    </div>




























    {{--        <div class="form-group col-md-2">--}}
    {{--            {!! form_label($form->bor_status) !!}--}}
    {{--            {!! form_widget($form->bor_status) !!}--}}
    {{--        </div>--}}



























    {{--        <div class="form-group col-md-2">--}}
    {{--            {!! form_label($form->bor_taxa_acordado) !!}--}}
    {{--            {!! form_widget($form->bor_taxa_acordado) !!}--}}
    {{--        </div>--}}







    <div class="hidden">
        {!! form_rest($form) !!}
    </div>
    {!! form_end($form) !!}

@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@endsection

