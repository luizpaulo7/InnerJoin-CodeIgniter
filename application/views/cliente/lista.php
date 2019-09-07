<div class="container border mt-5 p-5">
    <h1>LISTA DE ALUNOS</h1>
    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>nome</th>
                <th>email</th>
                <th>dtNascimento</th>
                <th>Curso</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno) { ?>
                <tr>
                    <th><?php echo $aluno->idAluno; ?></th>
                    <td><?php echo $aluno->nome; ?></td>
                    <td><?php echo $aluno->email; ?></td>
                    <td><?php echo $aluno->dtNascimento; ?></td>
                    <td><?php echo $aluno->nomeCurso; ?></td>
                    <td>
                        <i data-idaluno="<?php echo $aluno->idAluno; ?>" class="fas fa-edit iconEdit"></i>
                    </td>
                    <td>
                        <i data-idaluno="<?php echo $aluno->idAluno; ?>" class="fas fa-trash-alt iconDelete"></i>
                    </td>
                    <td>
                        <div class="modal fade" id="aluno<?php echo $aluno->idAluno; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $aluno->idAluno; ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="<?php echo $aluno->idAluno; ?>"><?php echo $aluno->nome; ?></h5>
                                        <i data-dismiss="modal" class="far fa-times-circle fa-2x iconCloseModal"></i>
                                    </div>
                                    <div class="modal-body details-aluno">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>NOME:</label>
                                                <?php echo $aluno->nome; ?>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>EMAIL:</label>
                                                <?php echo $aluno->email; ?>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>DATA DE NASCIMENTO:</label>
                                                <?php echo $aluno->dtNascimento; ?>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>CURSANDO:</label>
                                                <?php echo $aluno->nomeCurso; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <i data-toggle="modal" data-target="#aluno<?php echo $aluno->idAluno; ?>" data-idaluno="<?php echo $aluno->idAluno; ?>" class="fas fa-info-circle iconDetails"></i>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <h1>LISTA DE CURSOS</h1>
    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>nome</th>
                <th>formação</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $curso) { ?>
                <tr>
                    <th><?php echo $curso->idCurso; ?></th>
                    <td><?php echo $curso->nome; ?></td>
                    <td><?php echo $curso->formacao; ?></td>
                    <td>
                        <div class="modal fade" id="curso<?php echo $curso->idCurso; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $aluno->idAluno; ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="<?php echo $curso->idCurso; ?>"><?php echo $curso->nome; ?></h5>
                                        <i data-dismiss="modal" class="far fa-times-circle fa-2x iconCloseModal"></i>
                                    </div>
                                    <div class="modal-body details-curso">
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item full">FICHA TÉCNICA</li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item titulo">Formação</li>
                                            <li class="list-group-item descricao"><?php echo $curso->formacao; ?></li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item titulo">Modalidade</li>
                                            <li class="list-group-item descricao"><?php echo $curso->modalidade; ?></li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item titulo">Turno</li>
                                            <li class="list-group-item descricao"><?php echo $curso->turno; ?></li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item titulo">Regime seriado</li>
                                            <li class="list-group-item descricao"><?php echo $curso->regimeSeriado; ?></li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item titulo">Vagas anuais</li>
                                            <li class="list-group-item descricao"><?php echo $curso->vagasAnuais; ?></li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item titulo">Carga Horária</li>
                                            <li class="list-group-item descricao"><?php echo $curso->cargaHoraria; ?></li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item titulo">Duração</li>
                                            <li class="list-group-item descricao"><?php echo $curso->duracao; ?></li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item titulo">Cidade</li>
                                            <li class="list-group-item descricao"><?php echo $curso->cidade; ?></li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item titulo">Mensalidade</li>
                                            <li class="list-group-item descricao"><?php echo str_replace('.', ',', $curso->mensalidade); ?></li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item full"><?php echo $curso->descDesconto; ?></li>
                                        </ul>
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item full"><?php echo $curso->descValido; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <i data-toggle="modal" data-target="#curso<?php echo $curso->idCurso; ?>" data-idcurso="<?php echo $curso->idCurso; ?>" class="fas fa-info-circle iconDetails"></i>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>