{include file= 'templates/header.tpl'}
<table>
    
    <thead>
        <tr>
            <th>genero</th>
            <th>descripcion</th>
            <th></th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
        <tbody>
        
            {foreach from=$genres item=$genre}

                <tr>
                    <td>{$genre->genero}</td>
                    <td>{$genre->descripcion_genero}</td>
                    <td><a href="showByGenre/{$genre->id_genero}">ver mas</a></td>
                    <td> <a href='updateGenre/{$genre->id_genero}'>edit</a></td>
                    <td> <a href="deleteGenre/{$genre->id_genero}">delete</a></td>
                </tr>

            {/foreach}
        </tbody>
</table>

{include file= 'templates/footer.tpl'}