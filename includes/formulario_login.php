<?php

$alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger"'.$alertaLogin.'</div>' : '';
$alertaCadastro = strlen($alertaCadastro) ? '<div class="alert alert-danger"'.$alertaCadastro.'</div>' : '';

?>
<div class="jumbotron text-dark">

    <div class="row">
    
        <div class="col">
        
            <form method="post">

                <h2>Login</h2>


                <?=$alertaLogin?>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" placeholder="E-mail" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" placeholder="Senha" name="senha" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" value="logar"  name="acao" class="btn btn-primary" required>Entrar</button>
                    </div>

            </form>

        <div class="col">
        
            <form method="post">

                <h2>Cadastre-se</h2>

                <?=$alertaCadastro?>

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" placeholder="Nome" name="nome" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="email" placeholder="E-mail" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" placeholder="Senha" name="senha" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" value="cadastrar" name="acao" class="btn btn-primary" required>Cadastar</button>
                    </div>

            </form>
        
        </div>    
        
        </div>
    
    </div>


</div>