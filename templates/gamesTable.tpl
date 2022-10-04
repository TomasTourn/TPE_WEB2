
<table>

    <thead>
        <tr>
            <th>nombre</th>
            <th>precio</th>
            <th>descripcion</th>
            <th>genero</th>
            <th>imagen</th>
        </tr>
    </thead>
        <tbody>
            {foreach from=$games item=$game}

                <tr>
                    <td>{$game->nombre}</td>
                    <td>{$game->precio}</td>
                    <td>{$game->descripcion}</td>
                    <td>{$game->id_genero_fk}</td>
                    <td>{$game->imagen}</td>
                </tr>

            {/foreach}
        </tbody>
</table>