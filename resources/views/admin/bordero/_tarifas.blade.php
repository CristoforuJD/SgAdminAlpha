<table class="table table-hover">
    <thead>

    <th>Tarifa</th>
    <th>Valor</th>


    </thead>
    <tbody style="font-size: small">
    @foreach($tarifas as $tarifa)
        <tr>
            <td>{{ $tarifa->dtarifa->tar_desc }}</td>
            <td>{{ $tarifa->tab_valor }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
