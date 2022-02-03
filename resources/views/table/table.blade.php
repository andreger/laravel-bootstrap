<table class="{{ $classValue }}">
    @if ($caption)
        <caption>{{ $caption }}</caption>
    @endif

    @if ($hasHead)
        <thead>
            <tr>
                @foreach ($dataHead as $itemHead)
                    <th scope="col">{{ $itemHead }}</th>
                @endforeach
            </tr>
        </thead>
    @endif

    @if ($dataBody)
        <tbody>
        @foreach ($dataBody as $row)
        <tr>
            @foreach ($row as $column)
                <td>{{ $column }}</th>
            @endforeach
        </tr>
        @endforeach
        </tbody>
    @endif

    @if ($hasFoot)
        <tfoot>
        <tr>
            @foreach ($dataFoot as $itemFoot)
                <td>{{ $itemFoot }}</td>
            @endforeach
        </tr>
        </tfoot>
    @endif
</table>
