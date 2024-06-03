<div class="container">
    <div class="row mt-5">
        <h1>trp do tulu</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) : ?>
    
                    <tr>
                        <td><?php echo $cliente->id ?></td>
                        <td><?php echo $cliente->nome ?></td>
                        <td><?php echo $cliente->email ?></td>
                        <td><a class="btn btn-primary" href="<?php echo base_url('/clientes/editar/'.$cliente->id)?>">Editar</a></td>
                    </tr>
                
                <?php endforeach ?>
            </tbody>
            </table>
    </div>
</div>


    
