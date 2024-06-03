<div class="container">
    <div class="row mt-5">
        <h1>Cadastro de cliente</h1>
        <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non tempore suscipit perferendis sapiente animi, facilis culpa vero officiis? Rerum blanditiis ipsum eius ratione aliquid nemo animi optio. Fugiat, aliquid eligendi.</div>
    </div>
    <div class="row mt-5">
    
    <form action="salvar_novo_cliente" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome completo</label>
            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
        
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar!</button>
        </form>
    </div>
</div>