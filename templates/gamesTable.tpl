{include file= 'templates/header.tpl'}
<table>
    
    <thead>
        <tr>
            <th>nombre</th>
            <th>genero</th>
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
                    <td>{$game->genero}</td>
                    <td><img class="img" src="{$game->imagen}" alt=""></td>
                    <td><a href="showGame/{$game->id_juego}">ver más</a></td>
                    <td> <a href='editGame/{$game->id_juego}'>edit</a></td>
                    <td> <a href="deleteGame/{$game->id_juego}">delete</a></td>
                </tr>

            {/foreach}
        </tbody>
</table>

{include file= 'templates/footer.tpl'}