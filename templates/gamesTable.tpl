
<table>

    <thead>
        <tr>
            <th>nombre</th>
            <th>imagen</th>
            <th>ver más</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
        <tbody>
            {foreach from=$games item=$game}

                <tr>
                    <td>{$game->nombre}</td>
                    

                  <!-- 
                    <td>{$game->precio}</td> 
                    <td>{$game->descripcion}</td>
                    <td>{$game->genero}</td>
                -->

                    <td>{$game->imagen}</td>
                    <td><a href="showGame/{$game->id_juego}">ver más</a></td>
                    <td> <a href='edit/{$game->id_juego}'>edit</a></td>
                    <td> <a href="delete/{$game->id_juego}">delete</a></td>
                </tr>

            {/foreach}
        </tbody>
</table>