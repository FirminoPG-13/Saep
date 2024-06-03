<div class="container">
    <div class="row mt-5">
        <h1>Tropa do Tulu edições</h1>
    </div>  
    <div class="row mt-5">
    
    <form action="../editado" method="post">

        <input type="hidden" name="id" value=<?php echo $cliente->id?>>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome completo</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $cliente->nome?>">
        
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $cliente->email?>">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>

