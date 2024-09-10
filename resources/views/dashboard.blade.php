@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

<table id="customers">
    <center><h1>users</h1></center>
    <tr>
      <th>name</th>
      <th>email</th>
    </tr>


    @foreach ($users as $item)

        <tr>
            <td>
                {{$item->name}}
            </td>
            <td>
                {{$item->email}}
            </td>

        </tr>

    @endforeach
    <tr>
      <td>Alfreds Futterkiste</td>
      <td>Maria Anders</td>

    </tr>
    <tr>
      <td>Berglunds snabbköp</td>
      <td>Christina Berglund</td>
    </tr>

  </table>
<table id="customers">
    <center><h1>category</h1></center>
    <tr>
      <th>name</th>
      <th>descreption</th>
      <th>action</th>
    </tr>


    @foreach ($category as $item)

        <tr>
            <td>
                {{$item->name}}
            </td>
            <td>
                {{$item->desc}}
            </td>
            <td>
                <a class="button button3" href="{{route('upcat',$item->id)}}">update</a>
                <a class="button button3" href="{{route('delete',$item->id)}}">delete</a>
            </td>
        </tr>

    @endforeach


</table>
<table id="customers">
    <center><h1>product</h1></center>
    <tr>
      <th>name</th>
      <th>descreption</th>
      <th>price</th>
      <th>action</th>
    </tr>


    @foreach ($productesall as $item)

        <tr>
            <td>
                {{$item->p_name}}
            </td>
            <td>
                {{$item->p_description}}
            </td>
            <td>
                {{$item->p_price}}
            </td>
            <td>
                <a class="button button3" href="{{route('editprog',$item->id)}}">update</a>
                <a class="button button3" href="{{route('delete',$item->id)}}">delete</a>
            </td>
        </tr>

    @endforeach


  </table>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
