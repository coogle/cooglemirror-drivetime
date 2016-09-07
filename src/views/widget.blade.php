<div>Drive Times</div>
<table>
    <tr>
        <td colspan="2" class="small dim">(Last Update: {{ $driveData['updated'] }})</td>
    </tr>
    @foreach($driveData['times'] as $driveTime)
    <tr>
        <td class="small align-left">to <span class="bright">{{ $driveTime['destination'] }}</span></td>
        <td class="bright align-right">{{ $driveTime['eta'] }}</td>
    </tr>
    @endforeach
</table>