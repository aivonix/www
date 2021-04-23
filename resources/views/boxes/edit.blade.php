@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (isset($box))
{{ Form::open(array('route' => array('boxes.update', $box['id']))) }}
@method('PUT')
    <table>
        <tbody>
            <tr>
                <td><label for="title">Title</label></td>
                <td><input type="text" name="title" id="title" value="{{ $box['title'] }}" required></td>
            </tr>
            <tr>
                <td><label for="link">Link</label></td>
                <td><input type="text" name="link" id="link" value="{{ $box['link'] }}" required></td>
            </tr>
            <tr>
                <td><label for="colour">Color</label></td>
                <td>
                    <select name="colour" id="colour" value="{{ $box['colour'] }}">
                        <option value="" @if ($box['colour'] == '') selected @endif>--</option>
                        @foreach ($options as $opt)
                        <option value="{{$opt}}" @if ($box['colour'] == $opt) selected @endif>{{ ucwords($opt) }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">update</button></td>
            </tr>
        </tbody>
    </table>
{{ Form::close() }}
@else
{{ Form::open(array('route' => array('boxes.create'))) }}
    <table>
        <tbody>
            <tr>
                <td><label for="title">Title</label></td>
                <td><input type="text" name="title" id="title" value="" required></td>
            </tr>
            <tr>
                <td><label for="link">Link</label></td>
                <td><input type="text" name="link" id="link" value="" required></td>
            </tr>
            <tr>
                <td><label for="colour">Color</label></td>
                <td>
                    <select name="colour" id="colour" value="">
                        <option value="">--</option>
                        @foreach ($options as $opt)
                        <option value="{{$opt}}">{{ ucwords($opt) }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">update</button></td>
            </tr>
        </tbody>
    </table>
{{ Form::close() }}
@endif