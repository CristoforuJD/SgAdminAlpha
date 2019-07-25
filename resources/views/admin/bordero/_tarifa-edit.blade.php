<form id="update-rate" action="{{ route('bordero.rates.update', [
    'bordero' => $bordero->getKey(),
    'rate' => $rate->getKey(),
]) }}"
>
    @method('PUT')
    <div class="row">
        <div class="col-md-4">
            <label>Tarifa: </label>
            <div class="input-group" style="font-size: large">
                 {{ $rate->dtarifa->tar_desc }}
            </div>
        </div>

        <div class="col-md-4">
            <label>Valor: </label>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input id="rate-value-edit" type="number" class="form-control" value="{{ floatval($rate->tab_valor) }}"/>
            </div>
        </div>
    </div>
</form>
