
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3>
                    Novo Usuario
                    <small class="text-muted"> - Cadastre</small>
                </h3>
                <form action="<?= base_url('usuarios/cadastrarUsuario')?>" method="post">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Nome" name="nome" id="nome">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Sobrenome" name="sobrenome" id="sobrenome">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" type="email" placeholder="email@email.com" name="email" id="email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Senha" type="password" name="senha" id="senha">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Confirme sua Senha" type="password" name="confirmaSenha" id="confirmaSenha">
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Niveis de Acesso</h4>

                            <?php  foreach ($grupos as $grupo) { ?>
                                <div class="col-md-3">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="check_<?= $grupo['name'] ?>" value="<?= $grupo['id']; ?>" name="grupos[]">
                                        <label class="custom-control-label" for="check_<?= $grupo['name'] ?>"><?= $grupo['name'] ?></label>
                                    </div>

                                </div>
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-success" value="Cadastrar">
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

