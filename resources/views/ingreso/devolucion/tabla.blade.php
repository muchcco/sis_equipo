@foreach($tabla_entrega as $tabla)

<tr>
    <td> {{ $tabla->id }} </td>
    <td>{{ $tabla->nombre }} </td>
    <td>{{ $tabla->ap_paterno }} </td>
    <td>{{ $tabla->ap_materno }} </td>
    <td>{{ $tabla->cargo }} </td>
    <td>{{ $tabla->nombre }} </td>
</tr>



@endforeach