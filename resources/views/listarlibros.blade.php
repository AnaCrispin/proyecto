
@extends("inicio")
@section("contend")
@if($libros->isNotEmpty())
    <style>
        table {
            color: #fff;
            width: 100%;
            border: 1px solid #fff;
        }
        table td {
            padding: 1%;
            box-sizing: border-box;
            border: 1px solid #fff;
            text-align: center;
        }
    </style>
    
    <table>
        <tbody>
        @foreach($libros as $libro) <!-- Cambié $libros a $libro dentro del bucle -->
            <tr>
                <td>
                    <img height="200" width="200" src="data:image/jpg;base64,{{ base64_encode($libro->Portada) }}" alt="{{ $libro->Titulo }}">
                </td>
                <td>
                    <strong><p style="color:green;">Título: </p></strong>{{ $libro->Titulo }}<br><br>
                    <strong><p style="color:green;">Autor: </p></strong>{{ $libro->Autor }}<br><br>
                    <strong><p style="color:green;">Género: </p></strong>{{ $libro->Genero }}<br><br>
                    <strong><p style="color:green;">Editorial: </p></strong>{{ $libro->Editorial }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>No se encontraron resultados en libros...</p>
@endif
