
<div class="row">
    <div class="col-md-12">
        <?php if (isset($this->session->message)) { ?>
            <?= $this->session->message ?>
        <?php }; ?>

        <div class="card">
            <div class="card-header bg-transparent">
                    <div class="row justify-content-end">
                        <div class="col-2 ">
                            <button class="btn btn-icon btn-3 btn btn-outline-success" type="button" onclick="window.location.assign('usuarios/novoUsuario')">
                                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                <span class="btn-inner--text">Novo Usuario</span>
                            </button>
                        </div>

                    </div>
                <br>
                <table class="table align-items-center">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Email</th>
                            <th>Ativo</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($usuarios as $user) { ?>
                            <tr>
                                <td><?= $user->id; ?></td>
                                <td><?= $user->first_name ?></td>
                                <td><?= $user->last_name ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= ($user->active == 1 ? '<span class="label label-success">Ativo</span>' : '<span class="label label-danger">Inativo</span>' )?></td>
                                <td>
                                    <a href="#" class="btn btn-info"><i class="fa fa-edit"></i> </a>
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                                    <a href="#" class="btn btn-success"><i class="fa fa-arrow-circle-down"></i> </a>
                                </td>
                            </tr>


                        <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

