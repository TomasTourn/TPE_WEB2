{include file= 'templates/header.tpl'}
<table>
    
    <thead>
        <tr>
            <th>nombre</th>
            <th>precio</th>
            <th>descripcion</th>
            <th>genero</th>
            <th>imagen</th>
            <th>ver más</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
        <tbody>
                <tr>
                    
                    <td>{$game->nombre}</td>
                    <td>{$game->precio}</td> 
                    <td>{$game->descripcion}</td>
                    <td>{$game->genero}</td>
                    <td><img class="img" src='{$game->imagen}' alt=""></td>
                    <td> <a href='edit/{$game->id_juego}'>edit</a></td>
                    <td> <a href="delete/{$game->id_juego}">delete</a></td>
                </tr>

        </tbody>
</table>
<a href="home">volver a table</a>
{include file= 'templates/footer.tpl'}