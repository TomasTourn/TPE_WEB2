{include file= 'templates/header.tpl'}

<form   action="{$action}" method="post">
    
    <div class="form-floating"> 
        
            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="">
            <label for="name">Nombre</label>
          
</div>

<div class="form-floating"> 
    <input type="number" class="form-control" id="precio" name="precio" placeholder="precio" value="">
            <label for="precio">Precio</label>
</div>

<div class="form-floating"> 
    <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" value="">
            <label for="description">Descripcion</label>
</div>

    <div class="form-floating">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <label for="floatingSelect">Genero</label>
      </div>

      <button type="Submit" class="btn btn-primary">Guardar</button>
  </form>




{include file= 'templates/footer.tpl'}